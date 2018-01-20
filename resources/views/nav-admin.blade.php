<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="nav-item start active open">
            <a href="{{ url('admin') }}" class="nav-link">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-users"></i>
                <span class="title">Quản lý thành viên</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start">
                    <a href="{{ url('admin/users') }}" class="nav-link ">
                        <span class="title">Danh sách thành viên</span>
                        <span class="selected"></span>
                    </a>
                </li>
                {{--<li class="nav-item start ">--}}
                    {{--<a href="{{ url('admin/users/add') }}" class="nav-link ">--}}
                        {{--<span class="title">Thêm thành viên mới</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-list-alt"></i>
                <span class="title">Quản lý danh mục</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start">
                    <a href="{{ url('admin/categories') }}" class="nav-link ">
                        <span class="title">Danh sách danh mục</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{ url('admin/categories/add') }}" class="nav-link ">
                        <span class="title">Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-book"></i>
                <span class="title">Quản lý bài viết</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start">
                    <a href="{{ url('admin/posts') }}" class="nav-link ">
                        <span class="title">Danh sách bài viết</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{ url('admin/posts/add') }}" class="nav-link ">
                        <span class="title">Thêm bài viết mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ url('admin/lien-he') }}" class="nav-link">
                <i class="fa fa-address-card-o"></i>
                <span class="title">Quản lý Liên hệ</span>
                <span class="selected"></span>
            </a>
        </li>

        {{--<li class="nav-item">--}}
            {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                {{--<i class="icon-folder"></i>--}}
                {{--<span class="title">Multi Level Menu</span>--}}
                {{--<span class="arrow "></span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="javascript:;" class="nav-link nav-toggle">--}}
                        {{--<i class="icon-settings"></i> Item 1--}}
                        {{--<span class="arrow"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub-menu">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="javascript:;" target="_blank" class="nav-link">--}}
                                {{--<i class="icon-user"></i> Arrow Toggle--}}
                                {{--<span class="arrow nav-toggle"></span>--}}
                            {{--</a>--}}
                            {{--<ul class="sub-menu">--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="icon-power"></i> Sample Link 1</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="icon-paper-plane"></i> Sample Link 1</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a href="#" class="nav-link">--}}
                                        {{--<i class="icon-star"></i> Sample Link 1</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="icon-camera"></i> Sample Link 1</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="icon-link"></i> Sample Link 2</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="icon-pointer"></i> Sample Link 3</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="javascript:;" target="_blank" class="nav-link">--}}
                        {{--<i class="icon-globe"></i> Arrow Toggle--}}
                        {{--<span class="arrow nav-toggle"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub-menu">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="icon-tag"></i> Sample Link 1</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="icon-pencil"></i> Sample Link 1</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a href="#" class="nav-link">--}}
                                {{--<i class="icon-graph"></i> Sample Link 1</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link">--}}
                        {{--<i class="icon-bar-chart"></i> Item 3 </a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>