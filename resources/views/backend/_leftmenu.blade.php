<nav>
    <!-- start: SEARCH FORM -->
    <!-- end: SEARCH FORM -->
    <!-- start: MAIN NAVIGATION MENU -->
    <div class="navbar-title">
        <span>Main Navigation</span>
    </div>
        <ul class="main-navigation-menu">
            <li>
                <a href="index.html">
                    <div class="item-content">
                        <div class="item-media">
                            <i class="ti-home"></i>
                        </div>
                        <div class="item-inner">
                            <span class="title"> Dashboard </span>
                        </div>
                    </div>
                </a>
            </li>

            <li class="active open">
                <a href="javascript:void(0)">
                    <div class="item-content">
                        <div class="item-media">
                            <i class="ti-settings"></i>
                        </div>
                        <div class="item-inner">
                            <span class="title"> Categories </span><i class="icon-arrow"></i>
                        </div>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('/admin/categories/create/') }}">
                            <span class="title"> Add New Category </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/categories/') }}">
                            <span class="title"> List Categories </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="active open">
                <a href="javascript:void(0)">
                    <div class="item-content">
                        <div class="item-media">
                            <i class="ti-layers-alt"></i>
                        </div>
                        <div class="item-inner">
                            <span class="title"> Courses </span><i class="icon-arrow"></i>
                        </div>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('/admin/courses/create/') }}">
                            <span class="title"> Add New Course </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/courses/') }}">
                            <span class="title"> List Courses </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="active open">
                <a href="javascript:void(0)">
                    <div class="item-content">
                        <div class="item-media">
                            <i class="ti-user"></i>
                        </div>
                        <div class="item-inner">
                            <span class="title"> Users </span><i class="icon-arrow"></i>
                        </div>
                    </div>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ url('/admin/users/') }}">
                            <span class="title"> Users List </span>
                        </a>
                    </li>
                </ul>
            </li>



        </ul>

    <!-- end: MAIN NAVIGATION MENU -->
    <!-- start: CORE FEATURES -->

    <!-- end: CORE FEATURES -->
</nav>