<nav id="mini-side">

</nav>
<nav id="sidebar">
    <div class="sidebar-header">
        {{-- <h3>Bootstrap Sidebar</h3>
        <span class="app-logo" ><x-application-logo class="block h-10 w-auto fill-current text-gray-600" /></span> --}}
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <i class="fa fa-home"></i>
                <span class="link-text">Home</span>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-briefcase"></i>
                <span class="link-text">About</span>
            </a>
            <a href="#">
                <i class="fa fa-question"></i>
                <span class="link-text">FAQ</span>
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                <i class="fa fa-copy"></i>
                <span class="link-text">Pages</span>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
    </ul>

</nav>

