@extends('admin.layout.app')
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid pb-0">
            <!-- Page Header -->
            <div class="page-header">
                <div class="content-page-header">
                    <h5>Dashboard</h5>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="super-dashboard">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="dash-user-card w-100">
                            <h4><i class="fe fe-sun"></i>Greetings of the day ! {{ Auth::user()->name }}</h4>
                            <h3 class="text-white">Have a Good day at work !!!</h3>
                            <div class="dash-btns">
                                <a href="{{ route('admin-blogs') }}" class="btn view-company-btn">View Blogs</a>
                                <a href="{{ route('admin-course.index') }}" class="btn view-package-btn">View Courses</a>
                            </div>
                            <div class="dash-img">
                                <img src="{{ asset('admin/assets/img/dashboard-card-img.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 d-flex p-0">
                        <div class="row dash-company-row w-100 m-0">
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-01.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total Blogs</h6>
                                        <h5>{{ $blogs ?? '5'}}</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card bg-info-light w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-02.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total Leads</h6>
                                        <h5>{{ $totalLeads ?? '8' }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card bg-pink-light w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-03.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total States</h6>
                                        <h5>{{ $states ?? '9' }}</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 d-flex">
                                <div class="company-detail-card bg-success-light w-100">
                                    <div class="company-icon">
                                        <img src="{{ asset('admin/assets/img/icons/dash-card-icon-04.svg') }}" alt="" />
                                    </div>
                                    <div class="dash-comapny-info">
                                        <h6>Total Colleges</h6>
                                        <h5>{{$collegesCount ?? '12'}}</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-xl-6 d-flex">
                        <div class="card super-admin-dash-card">
                            <div class="card-header">
                                <div class="row align-center">
                                    <div class="col">
                                        <h5 class="card-title">Colleges</h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('colleges.index') }}"
                                            class="btn-right btn btn-sm btn-outline-primary">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover">
                                        <tbody>
                                            @forelse($colleges as $college)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#"
                                                                class="company-avatar avatar-md me-2 companies company-icon">
                                                                <img class="avatar-img rounded-circle company"
                                                                    src="{{ $college->image ? asset('storage/' . $college->image) : asset('admin/assets/img/companies/company-01.svg') }}"
                                                                    alt="College Image" />
                                                            </a>

                                                            <a href="#">
                                                                {{ \Illuminate\Support\Str::limit($college->name, 20) }}
                                                                <span class="plane-type">
                                                                    {{ $college->type ?? 'N/A' }}
                                                                </span>
                                                            </a>
                                                        </h2>
                                                    </td>

                                                    <td>
                                                        {{ $college->created_at->format('d M Y') }}
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="{{ route('colleges.index') }}" class="view-companies btn">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No colleges found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex">
                        <div class="card super-admin-dash-card">
                            <div class="card-header">
                                <div class="row align-center">
                                    <div class="col">
                                        <h5 class="card-title">States</h5>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('admin-college-states') }}"
                                            class="btn-right btn btn-sm btn-outline-primary">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover">
                                        <tbody>
                                            @forelse($statesData as $stateData)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="#"
                                                                class="company-avatar avatar-md me-2 companies company-icon">
                                                                <img class="avatar-img rounded-circle company"
                                                                    src="{{ $stateData->image ? asset('storage/' . $stateData->image) : asset('admin/assets/img/companies/company-01.svg') }}"
                                                                    alt="stateData Image" />
                                                            </a>

                                                            <a href="#">
                                                                {{ \Illuminate\Support\Str::limit($stateData->name, 20) }}
                                                                <span class="plane-type">
                                                                    {{ $stateData->type ?? 'N/A' }}
                                                                </span>
                                                            </a>
                                                        </h2>
                                                    </td>

                                                    <td>
                                                        {{ $stateData->created_at->format('d M Y') }}
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="{{ route('admin-college-states') }}" class="view-companies btn">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">No colleges found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-12 mb-4">
                        <div id="calendar"></div>
                    </div>
                    <!-- <div class="col-xl-7 d-flex">
                            <div class="card super-admin-dash-card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Leads</h5>
                                        <div class="d-flex align-center">
                                            <span class="earning-income-text"><i></i>Leads</span>
                                            <div class="dropdown main">
                                                <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    2024
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div id="earnings-chart"></div>
                                </div>
                            </div>
                        </div> -->








                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 500,

                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },

                events: [
                    {
                        title: 'Meeting',
                        start: '2026-04-25'
                    },
                    {
                        title: 'Event',
                        start: '2026-04-27',
                        end: '2026-04-29'
                    }
                ]
            });

            calendar.render();
        });
    </script>
@endpush