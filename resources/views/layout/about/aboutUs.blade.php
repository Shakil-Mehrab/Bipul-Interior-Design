@extends('layout.app')
@section('title','About us - ')
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
                            <p class="client_address">{{$client->address}}</p>
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
</div>
@endsection
