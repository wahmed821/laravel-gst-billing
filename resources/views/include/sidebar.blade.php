<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li>
                    <a href="{{ url('/') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Parties </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add-party') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Add
                                    New</a>
                            </li>
                            <li>
                                <a href="{{ route('manage-parties') }}"><i data-feather="list" class="pr-0 mr-1"></i>Manage
                                    Parties</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="edit"></i>
                        <span> GST Billing </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add-gst-bill') }}"><i data-feather="plus" class="pr-0 mr-1"></i>Create bill</a>
                            </li>
                            <li>
                                <a href="{{ route('manage-gst-bills') }}"><i data-feather="list" class="pr-0 mr-1"></i>Manage all bills</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
