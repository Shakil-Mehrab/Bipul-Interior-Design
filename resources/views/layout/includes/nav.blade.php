
<div class="menu">
    <span class="close-menu icon-cross2 right-boxed"></span>
    <div class="menu-lang right-boxed">
        <a href="#" class="active">Interion Deshign</a>
        {{-- <a href="#">Fra</a>
        <a href="#">Ger</a> --}}
    </div>
    <ul class="menu-list right-boxed" style="min-height: 100%;font-size:20px">
        <li class="active">
        <a href="/">Home</a>
        <ul>
        {{-- <li><a href="../light/index.html">Classic</a></li>
        <li><a href="home-fullpage.html">Full page</a></li>
        <li class="active"><a href="index.html">Dark</a></li> --}}
        </ul>
        </li>
        <li>
        {{-- <a href="works.html">Works</a>
        <ul>
        <li><a href="works-grid.html">Grid</a></li>
        <li><a href="works-masonry.html">Masonry</a></li>
        <li><a href="works-carousel.html">Carousel</a></li>
        <li><a href="project-detail.html">Project Detail</a></li>
        </ul>
        </li>
        <li> --}}
        <a href="#">Design View</a>
        <ul>
        <li><a href="/grid">Grid</a></li>
        <li><a href="/list">Listing</a></li>
        <li><a href="/carousel">Carousel</a></li>
        <li><a href="/detail">Project Detail</a></li>
        {{-- <li><a href="news-masonry.html">Masonry</a></li> --}}
        </ul>
        </li>
        <li>
        <a href="#">Post detail</a>
        <ul>
        <li><a href="/image">Image</a></li>
        <li><a href="/galery">Gallery</a></li>
        <li><a href="/video">Video</a></li>
        <li><a href="/right/sidebar">Right Sidebar</a></li>
        </ul>
        </li>
        <li>
        <a href="#">Pages</a>
        <ul>
        <li><a href="/about/us">About</a></li>
        <li><a href="/contact/us">Contact</a></li>
        </ul>
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
<div class="header_option col-md-6 col-md-offset-6 col-sm-12">
    <a href="#" class="header_link"><i class="fas fa-envelope header_icon"></i> Email : thespaceltd@gmail.com</a>
    <a href="#" class="header_link"><i class="fas fa-phone-square-alt header_icon"></i> Phone : +8801712428536</a>
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
    <a class="brand" href="/" style="margin-left: 10%">
        <img alt="" src="{{asset('images/logo.png')}}">
    </a>
    <div class="social-list hidden-xs">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{url('/about/us')}}">About Us</a></li>
            <li id="root-category"><a href="#">Portfolio <i class="fa fa-angle-down pull-right"></i></a>
                <ul id="sub-categroy">
                    @forelse ($categories as $cat)
                        <li><a href="{{url('/category/design/grid/view/'.$cat->id)}}"><img src="{{asset('/uploads/categories/'.$cat->image)}}" width="15px" alt=""> {{$cat->name}} ({{$cat->products->count()}})</a></li>
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
