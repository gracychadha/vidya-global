@extends('admin.layout.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header ">
                    <h5>Roles & Permission</h5>
                    <div class="list-btn">
                        <ul class="filter-list">
                            <li>
                                <div class="short-filter">
                                    <img class="me-2" src="{{ asset('admin/assets/img/icons/sort.svg') }}" alt="Sort by select">
                                    <div class="sort-by sort-by-ticket">
                                        <select class="sort select">
                                            <option>Sort by: Date</option>
                                            <option>Sort by: Date 1</option>
                                            <option>Sort by: Date 2</option>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-bs-original-title="Filter"><span class="me-2"><img
                                            src="{{ asset('admin/assets/img/icons/filter-icon.svg') }}" alt="filter"></span>Filter </a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#add_role"><i
                                        class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Roles</a>
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
                                            <th>ID</th>
                                            <th>Role Name</th>
                                            <th>Created at</th>
                                            <th class="no-sort">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Admin</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td class="d-flex align-items-center">
                                                <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_role"><i class="fa fa-edit me-1"></i> Edit
                                                    Role</a>
                                                <a href="permission.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-shield me-1"></i> Permissions</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Customer</td>
                                            <td>28 Nov 2023, 03:25 PM</td>
                                            <td class="d-flex align-items-center">
                                                <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_role"><i class="fa fa-edit me-1"></i> Edit
                                                    Role</a>
                                                <a href="permission.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-shield me-1"></i> Permissions</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Shop Owner</td>
                                            <td>19 Dec 2023, 06:12 PM</td>
                                            <td class="d-flex align-items-center">
                                                <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_role"><i class="fa fa-edit me-1"></i> Edit
                                                    Role</a>
                                                <a href="permission.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-shield me-1"></i> Permissions</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Receptionist</td>
                                            <td>9 Dec 2023, 06:12 PM</td>
                                            <td class="d-flex align-items-center">
                                                <a href="#" class="btn btn-greys me-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit_role"><i class="fa fa-edit me-1"></i> Edit
                                                    Role</a>
                                                <a href="permission.html" class="btn btn-greys me-2"><i
                                                        class="fa fa-shield me-1"></i> Permissions</a>
                                            </td>
                                        </tr>
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

    <!-- Add Asset -->
    <div class="toggle-sidebar">
        <div class="sidebar-layout-filter">
            <div class="sidebar-header">
                <h5>Filter</h5>
                <a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
            </div>
            <div class="sidebar-body">
                <form action="#" autocomplete="off">
                    <!-- Customer -->
                    <div class="accordion" id="accordionMain1">
                        <div class="card-header-new" id="headingOne">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Customer
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample1">
                            <div class="card-body-chat">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="checkBoxes1">
                                            <div class="form-custom">
                                                <input type="text" class="form-control" id="member_search1"
                                                    placeholder="Search here">
                                                <span><img src="{{ asset('admin/assets/img/icons/search.svg') }}" alt="img"></span>
                                            </div>
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Admin
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Customer
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Shop Owner
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username">
                                                            <span class="checkmark"></span> Receptionist
                                                        </label>
                                                    </div>
                                                    <div class="view-all">
                                                        <a href="javascript:void(0);" class="viewall-button-One"><span
                                                                class="me-2">View All</span><span><i
                                                                    class="fa fa-circle-chevron-down"></i></span></a>
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Customer -->

                    <!-- Select Date -->
                    <div class="accordion" id="accordionMain2">
                        <div class="card-header-new" id="headingTwo">
                            <h6 class="filter-title">
                                <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Select Date
                                    <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                </a>
                            </h6>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample2">
                            <div class="card-body-chat">
                                <div class="input-block mb-3">
                                    <label class="form-control-label">From</label>
                                    <div class="cal-icon">
                                        <input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="form-control-label">To</label>
                                    <div class="cal-icon">
                                        <input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Select Date -->

                    <button type="submit"
                        class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                        <span><img src="{{ asset('admin/assets/img/icons/chart.svg') }}" class="me-2" alt="Generate report"></span>Generate
                        report
                    </button>
                </form>

            </div>
        </div>
    </div>
    <!--/Add Asset -->

    <!-- Add Role Modal -->
    <div class="modal custom-modal fade" id="add_role" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Add Role</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-0">
                                    <label>Role Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Role Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Close</button>
                        <button type="submit" data-bs-dismiss="modal"
                            class="btn btn-primary paid-continue-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Role Modal -->

    <!-- Edit Role Modal -->
    <div class="modal custom-modal fade" id="edit_role" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <div class="form-header modal-header-title text-start mb-0">
                        <h4 class="mb-0">Edit Role</h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="input-block mb-0">
                                    <label>Role Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="Admin" placeholder="Enter Role Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-back cancel-btn me-2">Close</button>
                        <button type="submit" data-bs-dismiss="modal"
                            class="btn btn-primary paid-continue-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Role Modal -->

    </div>
    <!-- /Main Wrapper -->

@endsection