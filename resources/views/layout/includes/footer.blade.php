<footer id="footer" class="footer section">
    <div class="footer-flex">
        <div class="flex-item">
            <a class="brand pull-left" href="/">
            <img alt="" src="{{asset('images/logo.png')}}">
            </a>
        </div>
        <div class="flex-item">
            <div class="inline-block "><strong class="footer_heading">©The Space Ltd</strong><br>All Rights Resevered </div>
        </div>
        <div class="flex-item">
            <ul>
            <li><a href="#"><strong class="footer_heading branding_hover">Office Address</strong></a></li>
            @if(!empty($about))
                <li><a href="#" class="branding_hover">{{$about->address}}</a></li>
                <li><a href="#" class="branding_hover">Contact No: {{$about->phone}}</a></li>
                <li><a href="#" class="branding_hover">Email: {{$about->email}}</a></li>
            @endif
            </ul>
        </div>
        <div class="flex-item">
            <ul>
            <li><a href="{{url('/about/us')}}" class="branding_hover"><strong class="footer_heading">Information</strong></a></li>
            <li><a href="{{url('/about/us')}}" class="branding_hover">About Us</a></li>
            <li><a href="{{url('/contact/us')}}" class="branding_hover">Contact Us</a></li>
            </ul>
        </div>
        <div class="flex-item">
            <a href="#" class="header_link"><strong class="footer_heading">Follow Us</strong></a>
            <div class="social-list">
                <a href="#" class="header_link"><i class="fab fa-facebook-square footer_heading"></i></a>
                <a href="#" class="header_link"><i class="fab fa-twitter-square footer_heading"></i></a>
                <a href="#" class="header_link"><i class="fab fa-instagram-square footer_heading"></i></a>
            </div>
        </div>
    </div>
</footer>
