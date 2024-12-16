    <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">

            <!-- Dashboard -->
            <li class="side-nav-menu-item {{ Request::is('dashboard') ? 'active' : '' }} ">
                <a class="side-nav-menu-link media align-items-center" href="{{ route('dashboard') }}">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

            <!-- Title -->
            <li class="sidebar-heading h6">TASKS</li>
            <!-- End Title -->

            <!-- Users -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subUsers">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Students</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">

                    <li class="side-nav-menu-item " >
                        <a class="side-nav-menu-link" href="{{ route('addstudent') }}">Add Student</a>
                    </li>

                    <li class="side-nav-menu-item {{ Request::is('students') ? 'active' : '' }} ">
                        <a class="side-nav-menu-link" href="{{ route('viewstudents') }}">All Students</a>
                    </li>

                </ul>
                <!-- End Users: subUsers -->
            </li>
            <!-- End Users -->

            <!-- Attendance -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="">
                <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
                </span>
                    <span class="side-nav-fadeout-on-closed media-body">Attendance</span>
                    <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                </a>
            </li>
            <!-- End Attendance -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->
