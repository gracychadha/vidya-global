@extends('admin.layout.app')

@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">


    <!-- Page Header -->
    <div class="page-header">
        <div class="content-page-header">
            <h5>Colleges</h5>
            <div class="list-btn">
                <ul class="filter-list">
                    <li>
                        <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#add_college">
                            <i class="fa fa-plus-circle me-2"></i>Add College
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-center table-hover datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>College</th>
                                    <th>State</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th class="no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($colleges as $college)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            <a class="product-list-item-img">
                                                <img src="{{ $college->image ? asset('storage/'.$college->image) : asset('placeholder.png') }}" width="50">
                                                <span>{{ $college->name }}</span>
                                            </a>
                                        </td>

                                        <td>{{ $college->state->name ?? '-' }}</td>
                                        <td>{{ $college->type ?? '-' }}</td>

                                        <td>
                                            <span class="badge bg-{{ $college->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($college->status) }}
                                            </span>
                                        </td>

                                        <td class="d-flex align-items-center">

                                            <!-- Delete -->
                                            <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" class="d-inline delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn-action-icon border-0 bg-transparent delete-btn">
                                                    <i class="fe fe-trash-2"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Colleges found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
```

</div>

<!-- ADD COLLEGE MODAL -->

<div class="modal fade" id="add_college">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


        <div class="modal-header">
            <h4>Add College</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <form action="{{ route('colleges.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <label>State</label>
                        <select name="state_id" class="form-control">
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control name-input">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control slug-input" readonly>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>NAAC Grade</label>
                        <input type="text" name="naac_grade" class="form-control">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>

    </div>
</div>
```

</div>

@endsection

@push('scripts')

<script>
document.querySelectorAll('.name-input').forEach(function (input) {
    input.addEventListener('keyup', function () {
        let slug = this.value.toLowerCase()
            .replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');

        document.querySelector('.slug-input').value = slug;
    });
});

$('.delete-btn').click(function (e) {
    e.preventDefault();
    var form = $(this).closest('form');

    Swal.fire({
        title: 'Delete College?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});
</script>

@if(session('success'))

<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: '{{ session('success') }}',
    timer: 2000,
    showConfirmButton: false
});
</script>

@endif

@endpush
