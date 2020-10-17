
<div class="menu">
    <span class="close-menu icon-cross2 right-boxed"></span>
    <div class="menu-lang right-boxed">
        <a href="#" class="active rightside_interior_heading">Interion Deshign</a>
        {{-- <a href="#">Fra</a>
        <a href="#">Ger</a> --}}
    </div>
    <ul class="menu-list right-boxed" style="min-height: 100%;font-size:20px">
        <li class="active">
            <a href="/" class="rightside_menu_heading">Home</a>
        </li>
        <li>
            <a href="{{url('about/us')}}" class="rightside_menu_heading">About Us</a>
        </li>
        <li>
            <a href="#" class="rightside_menu_heading">Portfolio</a>
            <ul>
                @forelse ($categories as $cat)
                    <li><a href="{{url('/category/design/grid/view/'.$cat->id)}}" class="rightside_menu_heading"><img src="{{asset('/uploads/categories/'.$cat->image)}}" width="15px" alt=""> {{$cat->name}} ({{$cat->products->count()}})</a></li>
                @empty
                @endforelse
            </ul>
        </li>
        <li>
            <a href="/contact/us" class="rightside_menu_heading">Contact Us</a>
        </li>
    </ul>
    {{-- <div class="menu-footer right-boxed">
        <div class="social-list">
            <a href="#" class="icon ion-social-twitter"></a>
            <a href="#" class="icon ion-social-facebook"></a>
            <a href="#" class="icon ion-social-googleplus"></a>
            <a href="#" class="icon ion-social-linkedin"></a>
            <a href="#" class="icon ion-social-dribbble-outline"></a>
        </div>
        <div class="copy">© Bauhaus 2017. All Rights Reseverd<br> Design by LoganCee</div>
    </div> --}}
</div>
<header class="navbar boxed js-navbar top_header">
<div class="header_option top_header_option" align="right">
    <a href="#" class="header_link"><i class="fas fa-envelope header_icon"></i> Email : {{$about->email}}</a>
    <a href="#" class="header_link"><i class="fas fa-phone-square-alt header_icon"></i> Phone : {{$about->phone}}</a>
    <a href="#" class="header_link"><i class="fab fa-facebook-square"></i></a>
    <a href="#" class="header_link"><i class="fab fa-twitter-square"></i></a>
    <a href="#" class="header_link"><i class="fab fa-instagram-square"></i></a>
</div>
</header>
<header class="navbar boxed js-navbar lower_header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
   <div class="container-fluid">
    <a class="brand" href="/" style="margin-left: 3%;">
        <img alt="logo" class="logo_img" src="{{asset('images/logo.png')}}">
    </a>
    <div class="social-list hidden-xs">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{url('/about/us')}}">About Us</a></li>
            <li id="root-category"><a href="#">Portfolio <i class="fa fa-angle-down pull-right"></i></a>
                <ul id="sub-categroy">
                    @forelse ($categories as $cat)
                        <li><a href="{{url('/category/design/grid/view/'.$cat->id)}}" style="font-size: 1.1rem;font-weight:100"><img src="{{asset('/uploads/categories/'.$cat->image)}}" width="15px" alt=""> {{$cat->name}} ({{$cat->products->count()}})</a></li>
                    @empty
                    @endforelse
                </ul>
            </li>
            <li><a href="{{url('/contact/us')}}">Contact Us</a></li>
        </ul>
    </div>
    <div class="navbar-spacer hidden-sm hidden-xs"></div>
    {{-- <address class="navbar-address hidden-sm hidden-xs">call us: <span class="text-dark">(+080) 9684 32 45 789</span></address> --}}
   </div>
</header>
