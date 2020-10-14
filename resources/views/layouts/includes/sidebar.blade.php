
<aside class="main-sidebar">
<!-- sidebar -->
<div class="sidebar">
    <!-- sidebar menu -->
    <ul class="sidebar-menu">
    @if(auth()->user()->role_id==1)
        <li class="active">
            <a href="{{url('/dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
            <span class="pull-right-container">
            </span>
            </a>
        </li>
        <li class="treeview">
        <a href="#">
        <i class="fa fa-list"></i><span>Categories</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admin/add-category')}}">Add Category</a></li>
        <li><a href="{{url('admin/view-categories')}}">View Categories</a></li>
        </ul>
        </li>

        <li class="treeview">
        <a href="#">
        <i class="fa fa-list"></i><span>Slide</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admin/add-slide')}}">Add Slide</a></li>
        <li><a href="{{url('admin/view-slide')}}">View Slide</a></li>
        </ul>
        </li>
        {{-- <li class="treeview">
        <a href="#">
        <i class="fa fa-list"></i><span>User</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="{{url('user/profile')}}">Profile Setting</a></li>
        <li><a href="{{url('user/account')}}">Profile</a></li>
        </ul>
        </li> --}}
        <li class="treeview">
        <a href="#">
        <i class="fa fa-list"></i><span>About Us</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admin/add-about')}}">Add About Us</a></li>
        <li><a href="{{url('admin/view-about')}}">View About Us</a></li>
        </ul>
        </li>
        <li class="treeview">
        <a href="#">
        <i class="fa fa-list"></i><span>Our Client</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admin/add-client')}}">Add Clent</a></li>
        <li><a href="{{url('admin/view-client')}}">View Client</a></li>
        </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-list"></i><span>Our Partner</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('/admin/add-partner-images')}}">Add Partner</a></li>
                {{-- <li><a href="{{url('admin/view-partner')}}">View Partner</a></li> --}}
            </ul>
            </li>
        <li class="treeview">
        <a href="#">
        <i class="fa fa-product-hunt"></i><span>Interior Design</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admin/add-product')}}">Add Design</a></li>
        <li><a href="{{url('admin/view-products')}}">View Design</a></li>
        </ul>
        </li>
    @else
    @endif
        <li class="treeview">
        <a href="#">
        <i class="fa fa-gift"></i><span>Logout</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-jet-responsive-nav-link>
            </form>
            </a></li>


        </ul>
        </li>
    </ul>
</div>
<!-- /.sidebar -->
</aside>

