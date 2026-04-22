@extends('admin.layout.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Users</h5>
                    <div class="list-btn">
                        <ul class="filter-list">

                            <li>
                                <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#add_user"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add
                                    user</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>Mobile Number</th>
                                            <th>Role </th>
                                            <th>Last Activity</th>
                                            <th>Status</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $user)

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>
                                                    {{ $user->name }} <br>
                                                    {{ $user->email }}
                                                </td>

                                                <td>{{ $user->phone ?? '-' }}</td>

                                                <td>
                                                    {{ $user->roles->pluck('name')->first() }}
                                                </td>

                                                <td>{{ $user->created_at->diffForHumans() }}</td>


                                                <td>
                                                    @if($user->status == 1)
                                                        <span class="badge bg-success-light">Active</span>
                                                    @else
                                                        <span class="badge bg-danger-light">Inactive</span>
                                                    @endif
                                                </td>

                                                <td class="d-flex align-items-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown"
                                                            aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#edit_user_{{ $user->id }}"><i
                                                                            class="far fa-edit me-2"></i>Edit</a>
                                                                </li>
                                                                <li>
                                                                   <a class="dropdown-item deleteUserBtn"
   href="javascript:void(0);"
   data-id="{{ $user->id }}"
   data-bs-toggle="modal"
   data-bs-target="#delete_modal">
   <i class="far fa-trash-alt me-2"></i>Delete
</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>



                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->



    <!-- Add User -->
    <div class="modal custom-modal modal-lg fade" id="add_user" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add User</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="{{ route('users.store') }}" method="POST" id="addUserForm">
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="form-groups-item">

                                        <div class="row">

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>User Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Enter User Name" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>Email <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Enter Email Address" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="input-block mb-3">
                                                    <label>Role</label>
                                                    <select name="role" class="select" required>
                                                        @foreach($roles as $role)
                                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pass-group">
                                                    <div class="input-block">
                                                        <label>Password</label>
                                                        <input type="password" placeholder="********" name="password"
                                                          id="password"   class="form-control pass-input" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pass-group">
                                                    <div class="input-block">
                                                        <label>Confirm Password</label>
                                                        <input type="password" placeholder="********"
                                                            name="password_confirmation" id="confirm_password"
                                                            class="form-control pass-input" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Cancel</button>

                        <button type="submit" class="btn btn-primary paid-continue-btn">
                            Add User
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /Add User -->
   
    {{-- edit --}}
    @foreach($users as $user)
        <div class="modal custom-modal modal-lg fade" id="edit_user_{{ $user->id }}" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">Edit User</h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="form-groups-item">

                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="input-block mb-3">
                                                        <label>User Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{ $user->name }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="input-block mb-3">
                                                        <label>Email <span class="text-danger">*</span></label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ $user->email }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="input-block mb-3">
                                                        <label>Role</label>
                                                        <select name="role" class="select" required>

                                                            @foreach($roles as $role)

                                                                <option value="{{ $role->name }}" @if($user->hasRole($role->name))
                                                                selected @endif>

                                                                    {{ $role->name }}

                                                                </option>

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="pass-group">
                                                        <div class="input-block">
                                                            <label>Password <span class="text-danger">Keep Empty If you don't want to change it</span></label>
                                                            <input type="password" placeholder="********" name="password"
                                                                class="form-control pass-input">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-6 col-sm-12">
                                                    <div class="input-block ">
                                                        <label>Status</label>
                                                        <select name="status" class="select">

                                                            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>
                                                                Active
                                                            </option>

                                                            <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>
                                                                Inactive
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal"
                                class="btn btn-primary paid-cancel-btn me-2">Cancel</button>
                            <button type="submit" class="btn btn-primary paid-continue-btn">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- /Edit User -->

    <!-- Delete Items Modal -->
    <div class="modal custom-modal fade" id="delete_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Users</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <form id="deleteUserForm" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger paid-continue-btn">
        Delete
    </button>
</form>

                            </div>
                            <div class="col-6">
                                <a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Items Modal -->

    </div>
    <!-- /Main Wrapper -->
@endsection
@push('scripts')
    <script>

        document.getElementById("addUserForm").addEventListener("submit", function (e) {

            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {

                alert("Password and Confirm Password do not match!");
                e.preventDefault();

            }

        });

    </script>
    @if(session('success'))

        <script>

            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            })

        </script>

    @endif
    @if($errors->any())

        <script>

            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: '{{ $errors->first() }}'
            })

        </script>

    @endif
    <script>

document.querySelectorAll('.deleteUserBtn').forEach(button => {

    button.addEventListener('click', function () {

        let userId = this.getAttribute('data-id');

        let form = document.getElementById('deleteUserForm');

        form.action = "/users/" + userId;

    });

});

</script>
@endpush