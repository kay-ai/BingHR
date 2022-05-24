<nav id="mini-side">
    <ul class="list-unstyled components">
        <li>
            <a href="#">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#">
                </i><i class="fa fa-calendar-o" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-reply" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-address-book" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</nav>
<nav id="sidebar">
    <div class="sidebar-header"></div>

    <ul class="list-unstyled components">
        <li class="{{ $activePage == 'dashboard' ? 'active' : '' }}">
            <a href="{{route('dashboard')}}">
                <i class="fa fa-list-ul" aria-hidden="true"></i>
                <span class="link-text">Dashboard</span>
            </a>
        </li>
        <li class="{{ $activePage == 'users' ? 'active' : '' }}">
            <a href="{{url('/users')}}">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <span class="link-text">Users</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-briefcase"></i>
                <span class="link-text">Departments</span>
            </a>
        </li>

        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="link-text">Employees</span>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">
                        <i class="fa fa-list-ul mr-2" aria-hidden="true"></i>
                        All
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-plus mr-2" aria-hidden="true"></i>
                        Add
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-list-ol"></i>
                <span class="link-text">Activities</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-question"></i>
                <span class="link-text">Holidays</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <span class="link-text">Events</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-money" aria-hidden="true"></i>
                <span class="link-text">Payroll</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-question"></i>
                <span class="link-text">Accounts</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                <span class="link-text">Reports</span>
            </a>
        </li>
    </ul>

</nav>

