<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            {{-- -----------------------------------------------------------------------------------------------------
            SIDEBAR VERTICAL NAVBAR
            ------------------------------------------------------------------------------------------------------- --}}
            <ul class="sidebar-vertical">
                <!-- leads -->
                <li class="menu-title"><span>Main</span></li>
                <li>
                    <a href="{{ route('dashboard') }}" class="active"><i class="fe fe-home"></i> <span>
                            Dashboard</span>
                    </a>

                </li>
                <li class="submenu">
                    <a href="javascript:void(0)"><i class="fe fe-grid"></i> <span> Leads</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-leads') }}">Contact Leads</a></li>

                    </ul>
                </li>
                <!-- /leads -->



                <!-- management -->
                <li class="menu-title"><span>Management</span></li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-book"></i> <span> Blog</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-blogs') }}">All Blogs</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin-college-states') }}"><i class="fe fe-image"></i> <span>College States</span></a>
                </li>
                <li>
                    <a href="{{ route('colleges.index') }}"><i class="fe fe-image"></i> <span>Colleges</span></a>
                </li>
                <li>
                    <a href=""><i class="fe fe-award"></i> <span>Match Result</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-organizers') }}"><i class="fe fe-users"></i> <span>Organizers</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-partners') }}"><i class="fe fe-briefcase"></i> <span>Partners</span></a>
                </li>

                <li>
                    <a href="{{ route('admin-reviews') }}"><i class="fe fe-star"></i> <span>Review</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-sports') }}"><i class="fe fe-activity"></i> <span>Sports</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-team') }}"><i class="fe fe-users"></i> <span>Team</span></a>
                </li>
                <li>
                    <a href=""><i class="fe fe-calendar"></i> <span>Upcoming Match</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-videos') }}"><i class="fe fe-video"></i> <span>Videos</span></a>
                </li>
                <!-- /management -->

                <!-- CMS -->
                <li class="menu-title"><span>CMS</span></li>
                <li class="submenu">
                    <a href="javascript:void(0)"><i class="fe fe-home"></i>
                        <span> Home Page</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-home-slider') }}">Slider</a></li>
                        <li><a href="{{ route('admin-home-about.index') }}">About Section</a></li>
                        <li><a href="{{ route('admin-how-we-work.index') }}">How We Work Section</a></li>
                        <li><a href="{{ route('admin-home-benefit.index') }}">Benefits Section</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0)"><i class="fe fe-info"></i>
                        <span> About Page</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-about-section.index') }}">About Section</a></li>
                        <li><a href="{{ route('admin-about-values.index') }}">Values Section</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0)"><i class="fe fe-user"></i>
                        <span> Organizer About</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none">
                        <li><a href="{{ route('admin-organizer-about.index') }}">Organizer About Section</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin-required-documents.index') }}"><i class="fe fe-folder"></i> 
                        <span> Required Documents</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin-selection-process.index') }}"><i class="fe fe-check-circle"></i>
                        <span> Selection Process</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin-privacy-policy.index') }}"><i class="fe fe-shield"></i>
                        <span> Privacy Policy</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin-terms-condition.index') }}"><i class="fe fe-file-text"></i>
                        <span> Terms & Conditions</span>
                    </a>
                </li>

                <!-- /CMS -->



                <!-- User Management -->
                <li class="menu-title"><span>User Management</span></li>
                <li>
                    <a href="{{ route('admin-users.index') }}"><i class="fe fe-user"></i> <span>Users</span></a>
                </li>
                <li>
                    <a href="{{ route('admin-roles') }}"><i class="fe fe-clipboard"></i>
                        <span>Roles & Permission</span></a>
                </li>

                <!-- /User Management -->






                <!-- /Support -->

                <!-- Pages -->
                <li class="menu-title"><span>Pages</span></li>
                <li>
                    <a href="{{ route('profile.edit') }}"><i class="fe fe-user"></i> <span>Profile</span></a>
                </li>
                <!-- /Pages -->


                <!-- Settings -->
                <li class="menu-title"><span>Settings</span></li>

                <li>
                    <a href="{{ route('admin-settings.index') }}"><i class="fe fe-settings"></i> <span>Settings</span></a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fe fe-power"></i> <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


            </ul>
        </div>
    </div>
</div>