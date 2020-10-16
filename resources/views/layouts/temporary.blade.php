@extends('layout.app')
@section('title','Welcome to - ')
@section('jumbotron')
<main class="jumbotron">
    <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
            <ul>
                @forelse ($slides as $slide)
                <li data-transition='slideleft' data-slotamount='default' data-masterspeed="1000" data-fsmasterspeed="1000">
                    <img src="{{asset('/uploads/slider/'.$slide->image)}}" data-bgparallax="5" alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']" data-hoffset="['100']" data-y="['middle','middle','middle','middle']" data-voffset="['-250']" data-width="270" data-height="5" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="background-color:#E28E26;"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']" data-hoffset="['370']" data-y="['middle','middle','middle','middle']" data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="background-color:#E28E26;"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']" data-hoffset="['100']" data-y="['middle','middle','middle','middle']" data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="background-color:#E28E26;"> </div>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']" data-hoffset="['100']" data-y="['middle','middle','middle','middle']" data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="background-color:#E28E26;"> </div>
                    <div class="slider-title tp-caption tp-resizeme" data-x="['left']" data-hoffset="['156']" data-y="['middle','middle','middle','middle']" data-voffset="['-30']" data-textAlign="['left']" data-fontsize="['72', '63','57','50']" data-lineheight="['72','68', '62','54']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">{{$slide->part_1}}<br>{{$slide->part_2}}<br> {{$slide->part_3}}
                    </div>
                    <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']" data-y="['middle','middle','middle','middle']" data-voffset="['-170']" data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">{{$slide->slug}}
                    </div>
                    <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']" data-y="['middle','middle','middle','middle']" data-voffset="['230']" data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="font-weight:600;">
                    </a>
                    </div>
                </li>
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</main>
@endsection
@section('content')
<div class="content">

    <section class="section-about">
        <div class="container">
            <div class="row">
                @if(!empty($about))
                <div class="col-md-6">
                    <strong class="section-subtitle">about us</strong>
                    <h2 class="section-title section-about-title">{{$about->heading}}</h2>
                    <p>{{$about->description}}</p>
                    <div class="experience-box">
                        <div class="experience-border"></div>
                        <div class="experience-content">
                            <div class="experience-number">{{$about->number}}</div>
                            <div class="experience-info wow fadeInDown">{{$about->experience}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="dots-image">
                        <img alt="" class="about-img img-responsive" src="{{asset('/uploads/about/'.$about->image)}}">
                        <div class="dots"></div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    {{-- client --}}
    <section class="section-clients section bg-dots">
        <div class="container">
            <h2 class="section-title">Our Clients Complements</h2>
            <div class="client-carousel owl-carousel">
                @forelse ($clients as $client)
                <div class="client-carousel-item">
                    <img alt="" class="client-img" src="{{asset('/uploads/client/'.$client->image)}}">
                    <div class="client-box">
                        <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
                        <div class="client-title">
                            <span class="client-name">{{$client->name}}</span>
                            <span class="client-company">/ {{$client->designation}}</span>
                        </div>
                        <p class="client-description">{{$client->description}}</p>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
            <br>
            <h4>Our Clients</h4>
            <div class="partner-carousel owl-carousel" style="margin-top: 2rem;">
                @forelse ($partners as $part)
                <div class="partner-carousel-item">
                    <img alt="" src="{{asset('/uploads/partner/'.$part->image)}}">
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    {{-- Field Of Work --}}
    <section class="section-projects section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                <h2 class="section-title">Field Of Work </h2>
                </div>
                <div class="col-lg-7">
                    <div class="filter-content">
                        <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
                            <li class="active"><a href="#" class="all" data-filter="*">All</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-carousel owl-carousel">
        @forelse($categories as $cat)
        <div class="project-item item-shadow building">
            <img alt="" class="img-responsive" src="{{asset('/uploads/categories/'.$cat->image)}}">
            <div class="project-hover">
                <div class="project-hover-content category_hover_font_color">
                    <h3 class="project-title">
                        <br>{{$cat->name}}<br>
                        <a href="{{url('/category/design/grid/view/'.$cat->id)}}">{{$cat->title}}</a>
                    </h3>
                    <p class="project-description">{{$cat->description}}</p>
                </div>
            </div>
            <a href="{{url('/category/design/grid/view/'.$cat->id)}}" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
        </div>
        @empty
        @endforelse
        </div>
    </section>


    <section class="section-news section">
        <div class="container">
            <h2 class="section-title">Latest Projects <a href="#" class="link-arrow-2 pull-right all_article_branding_color">All Articles <i class="icon ion-ios-arrow-right"></i></a></h2>
            <div class="news-carousel owl-carousel">

                @forelse ($products as $pdt)
                <div class="news-item project-item item-shadow building">
                    <img alt="" src="{{asset('/uploads/products/'.$pdt->image)}}">
                    <div class="news-hover project-hover">
                        <div class="project-hover"><div></div></div>
                        <div class="content project-hover-content news_hover_font_color">
                            <h3 class="news-title"><a href="{{url('/design/detail',$pdt->id)}}">{{$pdt->name}}</a></h3>
                            <p class="news-description">{{$pdt->description}}</p>
                        </div>
                        <a class="read-more new_continue_hover" href="{{url('/design/detail',$pdt->id)}}">Continue</a>
                    </div>
                </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>
</div>
@endsection

@import url('https://fonts.googleapis.com/css2?family=Rajdhani&display=swap');
/* @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap'); */
body{
    font-family: 'Rajdhani', sans-serif;
}
::-webkit-scrollbar-thumb {
    cursor: pointer;
    background: #E28E26;
}
a:hover{
    color: #E28E26;
}
.top_header{
    display: flex;
    padding-top: 5px;
    background-color: #2e2f2f;
    height: 3rem;
}
.lower_header{
    top: 3rem;
}
.header_option{
    float: right!important;
}
.header_option a{
    text-decoration: none;
}
.header_link{
    margin-right: 5px;
    margin-top: 5px;
    color: white;
}
/* .header_link:hover{
    color: #E28E26;
} */
.header_icon{
    color: #E28E26;
}
.menu-list>li {
font-size: 1.4rem;
}
.social-list a{
    font-size: 1.1rem;
}
.social-list ul{
    display: flex;
    flex-direction: row;
}
.social-list ul li{
    list-style: none;
    padding: 8px;
}
#sub-categroy{
    display: flex;
    flex-direction:column;
    position:absolute;
    margin:2rem 0 0 0;
    background:black;
    opacity: 0;
    transition: opacity 1s ease;
}
#sub-categroy li{
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 12px;
    color: white;
    box-sizing: border-box;
    border-top: 1px solid rgba(255, 255, 255, .1);
    border-bottom: 1px solid black;
}
#root-category:hover #sub-categroy{
    opacity: 1;
}
.navbar-toggle:hover .icon-bar {
    background-color:#E28E26;
}
.social-list a:hover {
    color: #E28E26;
}
.section-subtitle {
    color: #E28E26;
}
.experience-border {
    border: .357rem solid #E28E26;
}

.filter li a:hover, .filter .active a {
    color: #E28E26;
}
/* connected //////////////////////////////////////////////*/
/* jor kore category yellow hover to branding color */
.project-item:hover .project-hover {
    background-color: #414042;
}
.category_hover_font_color .project-title{
    color:white;
}
.category_hover_font_color .project-title a{
    color:white;
}
.category_hover_font_color .project-title a:hover{
    color:#ffd530;
}
.category_hover_font_color .project-description{
    color:black;
}
/*end of jor kore category yellow hover to branding color */

/* jor kore news hover baniyechi */
.news_hover_font_color{
    z-index: 9999;
}
.news_hover_font_color a{
    color: white;
}
.news_hover_font_color a:hover{
    color: #ffd530!important;
}
.all_article_branding_color:hover{
    color: #E28E26;
}
.news_hover_font_color .news-description{
    color: black;
}
.new_continue_hover{
    z-index: 9999;
    color: black!important;
}
/* end of jor kore banano */
/* endconnected////////////////////////////////////////// */
/* //semi connected make it black if avove twos are none */

.abbout_call_directly{
    font-size: 40px;
    color: white;
}
.footer_heading{
    font-size: 20px;
}
.news_hover_font_color{
    color: black;
    z-index: 9999;
}
.branding_hover:hover{
    color: #E28E26!important;
}
.rightside_interior_heading{
    color: #E28E26!important;
}
.rightside_menu_heading:hover{
    color: #E28E26!important;
}
.tp-bullet.selected, .tp-bullet:hover {
    background: #E28E26;
}
.brand img {
    width: 225px;
    height: 4.356rem;
}
.navbar .brand {
    margin-top: -1.5rem;
}
.map{
    max-height: 500px;
    overflow: hidden;
}


.title-hr {
    background: #E28E26;
}
@media(max-width:1028px){
    .map img{
        width: 100%;
    }
}

@media(max-width:500px){
    .top_header{
        height: 5rem;
    }
    .lower_header{
        top: 5rem;
    }
    .map img{
        width: 100%;
    }
}

