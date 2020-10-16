@extends('layout.app')
@section('title','Contact us - ')
@section('content')
{{-- style="background-image: url('{{asset('images/contacback.jpg')}}')" --}}
<main class="page-header-3" >
    <div class="container">
        <div class="row">
            <div class="col-md-3" >
            {{-- <div class="title-hr"></div> --}}
            </div>
            <div class="col-md-8 col-lg-6"><h1>Enjoy Coffee With Us</h1></div>
        </div>
    </div>
</main>
<div class="content">
    <div id="map" class="map"><img src="{{asset('images/map.jpg')}}" alt=""></div>
        <div class="page-inner">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                {{-- <div class="title-hr"></div> --}}
                                <div class="info-title">Keep in touch</div>
                            </div>
                        </div>
                        @if(!empty($about))
                        <div class="col-md-9">
                            <div class="row-contact row">
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">{{$about->location}}</h3>
                                    <p class="contact-address text-muted">
                                        <strong>{{$about->address}}</strong><br>
                                        <strong style="color: white">Email: </strong>{{$about->email}}
                                    </p>
                                </div>
                                <div class="col-contact col-lg-6">
                                    <h3 class="contact-title contact-top">Call Us Direcly</h3>
                                    <p class="contact-address text-muted"><span>{{$about->phone}}</span></p>
                                    <h5 class="contact-title contact-top" style="margin-top: 10px">Working Hours</h5>
                                    <p class="contact-address text-muted"><span>Saturday - Wednesday : 10am - 10pm</span></p>
                                    <p class="contact-address text-muted"><span> Thursday: 10am - 12pm, Friday off work</span></p>

                                        <h6 class="contact-title contact-top" style="margin-top: 10px">Follow Us</h6>
                                        <div class="contact-social social-list">
                                            <a href="#" class="header_link"><i class="fab fa-facebook-square"></i></a>
                                            <a href="#" class="header_link"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#" class="header_link"><i class="fab fa-instagram-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            {{-- <section class="section-message section">
            <div class="container">
            <div class="row">
            <div class="col-md-3">
            <div class="section-info">
            <div class="title-hr"></div>
            <div class="info-title">You need help</div>
            </div>
            </div>
            <div class="col-md-9">
            <form class="js-form">
            <div class="row">
            <div class="form-group col-sm-6 col-lg-4">
            <input class="input-gray" type="text" name="name" required placeholder="Name*">
            </div>
            <div class="form-group col-sm-6 col-lg-4">
            <input class="input-gray" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-sm-12 col-lg-4">
            <input class="input-gray" type="text" name="subject" placeholder="Subject (Optinal)">
            </div>
            <div class="form-group col-sm-12">
            <textarea class="input-gray" name="message" required placeholder="Message*"></textarea>
            </div>
            <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn">Send Message</button></div>
            </div>
            <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
            <div class="error-message">We're sorry, but something went wrong</div>
            </form>
            </div>
            </div>
            </div>
            </section> --}}
    </div>
</div>
@endsection
