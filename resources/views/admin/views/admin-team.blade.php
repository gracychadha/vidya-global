@extends('admin.layout.app')
@section('content')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="content-page-header ">
                        <h5>Team </h5>
                        <div class="list-btn">
                            <ul class="filter-list">


                                <li>
                                    <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_category"><i class="fa fa-plus-circle me-2"
                                            aria-hidden="true"></i>Add Team</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->





                <!-- Table -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class=" card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-center table-hover datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th> Name</th>
                                                <th>Designation</th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($teams as $team)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>
                                                    <a href="" class="product-list-item-img">
                                                        <img src="{{ $team->image ? asset('storage/' . $team->image) : asset('placeholder.png') }}" alt="team">
                                                        <span>{{ $team->name }}</span>
                                                    </a>
                                                </td>

                                                <td>{{ $team->designation }}</td>

                                                <td class="d-flex align-items-center">

                                                    <a class="btn-action-icon me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#view_team{{ $team->id }}">
                                                        <i class="fe fe-eye"></i>
                                                    </a>

                                                    <a class="btn-action-icon me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#edit_team{{ $team->id }}">
                                                        <i class="fe fe-edit"></i>
                                                    </a>

                                                    <form action="{{ route('admin-team.destroy', $team->id) }}" method="POST" class="d-inline delete-form">

                                                        @csrf
                                                        @method('DELETE')

                                                        <a class="btn-action-icon  delete-btn">
                                                            <i class="fe fe-trash-2"></i>
                                                        </a>

                                                    </form>

                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td></td>
                                                <td >
                                                    No Team Members found yet.
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Table -->

            </div>
        </div>
        <!-- Add blog Modal -->
        <div class="modal custom-modal fade" id="add_category" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <div class="form-header modal-header-title text-start mb-0">
                            <h4 class="mb-0">Add Team Member</h4>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <form action="{{ route('admin-team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="modal-body">
    <div class="row">

    <div class="col-lg-6 mb-3">
    <label>Team Member Name <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
    </div>

    <div class="col-lg-6 mb-3">
    <label>Designation <span class="text-danger">*</span></label>
    <input type="text" name="designation" class="form-control" placeholder="Enter Designation" required>
    </div>



    <div class="col-lg-6 mb-3">
    <label>Status <span class="text-danger">*</span></label>
    <select name="status" class="form-control">
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
    </select>
    </div>

    <div class="col-lg-6 mb-3">
    <label>Profile Image <span class="text-danger">*</span></label>
    <input type="file" name="image" class="form-control" required>
    <small class="text-muted">Recommended size: 350 × 470 (Max 5MB)</small>
    </div>

    <div class="col-lg-12 mt-3">
    <h6 class="mb-2">Social Links</h6>
    </div>

    <div class="col-lg-4 mb-3">
    <label>Facebook</label>
    <input type="url" name="facebook_link" class="form-control" placeholder="https://facebook.com/...">
    </div>

    <div class="col-lg-4 mb-3">
    <label>Twitter</label>
    <input type="url" name="twitter_link" class="form-control" placeholder="https://twitter.com/...">
    </div>

    <div class="col-lg-4 mb-3">
    <label>Instagram</label>
    <input type="url" name="instagram_link" class="form-control" placeholder="https://instagram.com/...">
    </div>
    <div class="col-lg-6 mb-3">
    <label>Description <span class="text-danger">*</span></label>
    <textarea type="text" name="description" class="form-control" placeholder="Enter Description" required></textarea>
    </div>

    </div>
    </div>

    <div class="modal-footer">
    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary me-3">Cancel</button>
    <button type="submit" class="btn btn-primary">Add Team Member</button>
    </div>

    </form>
                </div>
            </div>
        </div>
        <!-- /Add  Modal -->
        @foreach($teams as $team)
        {{-- view modal --}}
        <div class="modal custom-modal fade" id="view_team{{ $team->id }}" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">View Team Member</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <table class="table table-bordered table-striped mb-0">

                        <tr>
                            <th>Name :</th>
                            <td>{{ $team->name }}</td>

                            <th>Designation :</th>
                            <td>{{ $team->designation }}</td>
                        </tr>



                        <tr>
                            <th>Image :</th>
                            <td>
                                @if($team->image)
                                    <img src="{{ asset('storage/' . $team->image) }}" width="120">
                                @endif
                            </td>

                            <th>Facebook :</th>
                            <td>
                                @if($team->facebook_link)
                                    <a href="{{ $team->facebook_link }}" target="_blank">View</a>
                                @else
                                    —
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>Twitter :</th>
                            <td>
                                @if($team->twitter_link)
                                    <a href="{{ $team->twitter_link }}" target="_blank">View</a>
                                @else
                                    —
                                @endif
                            </td>

                            <th>Instagram :</th>
                            <td>
                                @if($team->instagram_link)
                                    <a href="{{ $team->instagram_link }}" target="_blank">View</a>
                                @else
                                    —
                                @endif
                            </td>
                        </tr>
                         <tr>


                            <th>Status :</th>
                            <td>
                                <span class="badge bg-{{ $team->status == 'active' ? 'success' : 'danger' }}">
                                    {{ ucfirst($team->status) }}
                                </span>
                            </td>
                        </tr>
                         <tr>


                            <th>Description :</th>
                            <td colspan="3">
                                {{ $team->description }}
                            </td>
                        </tr>

                    </table>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div><div class="modal custom-modal fade" id="edit_team{{ $team->id }}" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">

                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Team Member</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin-team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <label>Name *</label>
                                <input type="text" name="name" class="form-control" value="{{ $team->name }}">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Designation *</label>
                                <input type="text" name="designation" class="form-control" value="{{ $team->designation }}">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Status *</label>
                                <select name="status" class="form-control">
                                    <option value="active" {{ $team->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $team->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">

                                @if($team->image)
                                    <img src="{{ asset('storage/' . $team->image) }}" width="80" class="mt-2">
                                @endif
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Facebook</label>
                                <input type="url" name="facebook_link" placeholder="facebook url" class="form-control" value="{{ $team->facebook_link }}">
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Twitter</label>
                                <input type="url" name="twitter_link" placeholder="twitter url" class="form-control" value="{{ $team->twitter_link }}">
                            </div>

                            <div class="col-lg-4 mb-3">
                                <label>Instagram</label>
                                <input type="url" name="instagram_link" placeholder="instagram url" class="form-control" value="{{ $team->instagram_link }}">
                            </div>
                                        <div class="col-lg-12 mb-3">
                                            <label>Description</label>
                                            <input type="text" name="description" placeholder="Description" class="form-control" value="{{ $team->description }}">
                                        </div>



                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary">Update Team Member</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

       @endforeach

@endsection
@push('scripts')

    <script>
        document.querySelectorAll('input[name="title"]').forEach(function (input) {
            input.addEventListener('keyup', function () {
                let slug = this.value.toLowerCase()
                    .replace(/ /g, '-')
                    .replace(/[^\w-]+/g, '');

                this.closest('form').querySelector('input[name="slug"]').value = slug;
            });
        });

        $(document).ready(function () {

            $('.delete-btn').click(function (e) {
                e.preventDefault();

                var form = $(this).closest('form');

                Swal.fire({
                    title: 'Delete Team Member?',
                    text: "This Team Member will be permanently deleted!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });

            });

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
@endpush