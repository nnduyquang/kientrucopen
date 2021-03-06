<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
{{--<li class="header">HEADER</li>--}}
<!-- Optionally, you can add icons to the links -->
    <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/dashboard') }}" href="{{ route('dashboard') }}"><i class="fa fa-link"></i>
            <p>Dashboard</p></a>
    @if(Auth::user()->hasRole('admin')||Auth::user()->can('user-list'))
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/users') }}" href="{{ route('users.index') }}"><i class="fa fa-link"></i>
                <p>Người Dùng</p></a>
        </li>
    @endif
    @if(Auth::user()->can('role-list'))
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/roles')}}" href="{{ route('roles.index') }}"><i class="fa fa-link"></i>
                <p>Quyền</p></a></li>
        @endif
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/danh-muc-bai-viet') }}" href="{{ route('categorypost.index') }}"><i class="fa fa-link"></i>
                <p>Chuyên Mục Bài Viết</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/page') }}" href="{{ route('page.index') }}"><i class="fa fa-link"></i>
                <p>Trang</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/post-service') }}" href="{{ route('post-service.index') }}"><i class="fa fa-link"></i>
                <p>Bài Viết Dịch Vụ</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/post-project') }}" href="{{ route('post-project.index') }}"><i class="fa fa-link"></i>
                <p>Bài Viết Dự Án</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/danh-muc-san-pham') }}" href="{{ route('categoryproduct.index') }}"><i class="fa fa-link"></i>
                <p>Chuyên Mục Sản Phẩm</p></a>
        </li>
        <li class="nav-item"><a class="nav-link {{ set_active('sml_admin/san-pham') }}" href="{{ route('product.index') }}"><i class="fa fa-link"></i>
                <p>Sản Phẩm</p></a>
        </li>
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
                <i class="fa fa-link"></i>
                <p>Cấu hình</p>
                <i class="right fa fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('config.general.index') }}" class="nav-link {{ set_active('sml_admin/config/general') }}">
                        {{--<i class="fa fa-link"></i>--}}
                        <p>Cấu Hình Chung</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('config.email.index') }}" class="nav-link {{ set_active('sml_admin/config/email') }}">
                        {{--<i class="fa fa-link"></i>--}}
                        <p>Cấu Hình Email</p>
                    </a>
                </li>
            </ul>
        </li>
        <hr style="background-color: #4f5962">
        <div class="sign-out" style="text-align: center">
            <a href="{{URL::to('admin/sml_logout')}}" class="btn btn-default nav-link" style="color: #5a3c3c"><p>Sign out</p></a>
        </div>
        {{--<li><a href="{{ route('tuyendung.index') }}"><i class="fa fa-link"></i> <span>Tuyển Dụng</span></a>--}}
        {{--</li>--}}
        {{--<li><a href="{{ route('menu.index') }}"><i class="fa fa-link"></i> <span>Quản Lý Menu</span></a>--}}
        {{--</li>--}}
        {{--<li class="treeview">--}}
        {{--<a href="#"><i class="fa fa-link"></i><span>Cấu Hình</span>--}}
        {{--<span class="pull-right-container">--}}
        {{--<i class="fa fa-angle-left pull-right"></i>--}}
        {{--</span>--}}
        {{--</a>--}}
        {{--<ul class="treeview-menu">--}}
        {{--<li><a href="#">Cấu Hình Chung</a></li>--}}
        {{--<li><a href="{{ route('config.email.index') }}">Email</a></li>--}}
        {{--<li><a href="{{ route('config.slider.index') }}"><i class="fa fa-link"></i>--}}
        {{--<span>Quản Lý Slider</span></a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
</ul>