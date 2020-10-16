@extends('layout.app')
@section('title','Images - ')
@section('content')
{{-- <div class="post-thumbnail masked" style="background: url(/images/news/1-1920x1080.jpg) 50% no-repeat;">
    <div class="container">
    <div class="row">
    <div class="col-md-10 col-lg-6 col-md-offset-1 col-lg-offset-2">
    <div class="title-info">architecture & interior</div>
    <h1 class="display-1">Small House Near Wroclaw</h1>
    </div>
    </div>
    </div>
</div> --}}
<div class="page-content">
    <div class="primary">
        <div class="container">
            <article class="post">
                {{-- <div class="row">
                    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <div class="posted-on">
                            <a class="url fn n" href="#">Admin</a>
                            on Dec 15th, 2016
                        </div>
                    </div>
                </div> --}}
                <div class="entry-content">
                    @forelse ($product->productImages as $img)
                        {{-- <div class="row">
                        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                            <h3 class="entry-description">To mark the first UK show of artist<br> Henri Barande, graphic designer <strong>Pavel Murren</strong> and German studio Schultzschultz have created<br> The Lodge Wooden</h3>
                            <p>This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism, because it is part of the threat-protection system. In other words, what keeps us safe can go too far, and keep us too safe. In fact it can trigger self-censoring.</p>
                            <p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. The same is true as we experience the emotional sensation of stress from our first instances of social rejection or ridicule. We quickly learn to fear and thus automatically avoid potentially stressful situations of all kinds, including the most common of all: making mistakes. </p>
                        </div>
                        </div> --}}
                        <div class="row-images row">
                            <div class="col-image col-sm-12"><img src="{{asset('/uploads/products/detail/'.$img->image)}}"></div>
                            {{-- <div class="col-image col col-sm-6"><img src="{{asset('images/news/1-570x572.jpg')}}"></div>
                            <div class="col-image col col-sm-6"><img src="{{asset('images/news/2-570x572.jpg')}}"></div> --}}
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                                <h4>Defaulting to Mindfulness</h4>
                                <p>Everything along the way, to and from, fascinated her: every pebble, ant, stick, leaf, blade of grass, and crack in the sidewalk was something to be picked up, looked at, tasted, smelled, and shaken. Everything was interesting to her. She knew nothing. I knew everything…been there, done that. She was in the moment, I was in the past. She was mindful. I was mindless.</p>
                                <blockquote><p>Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</p>
                                </blockquote>
                                <p class="blockquote-cite"><cite>Logan Cee</cite>Envato Author</p>
                                <p>Both of these assumptions, of course, could be entirely false. Self-censoring is firmly rooted in our experiences with mistakes in the past and not the present. The brain messages arising from those experiences can be deceptive. </p>
                            </div>
                        </div> --}}
                    @empty
                    @endforelse

                </div>
                {{-- <div class="entry-footer">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                            <div class="tags-links">
                                <span>Tags:</span>
                                <a href="#">Inspiration</a>,
                                <a href="#">Workspace</a>,
                                <a href="#">Minimal</a>,
                                <a href="#">Decoation</a>
                            </div>
                            <div class="post-share">
                                <span>Share:</span>
                                <a href="#" class="icon ion-social-facebook"></a>
                                <a href="#" class="icon ion-social-twitter"></a>
                                <a href="#" class="icon ion-social-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </article>
            {{-- <section class="related-posts">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                        <h6 class="related-post-title">Related Posts</h6>
                    </div>
                </div>
                <div class="news-carousel owl-carousel">
                    @forelse ($product->category->products as $pdt)
                        @if($pdt->id==$product->id)
                        @else
                            <div class="news-item">
                                <img alt="" src="{{asset('/uploads/products/'.$pdt->image)}}">
                                <div class="news-hover">
                                    <div class="hover-border"><div></div></div>
                                    <div class="content">
                                        <div class="time">{{$pdt->created_at->diffForHumans()}}</div>
                                        <h3 class="news-title">{{$pdt->name}}</h3>
                                        <p class="news-description">{{$pdt->description}}</p>
                                    </div>
                                    <a class="read-more" href="{{url('/design/detail',$pdt->id)}}">Continue</a>
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                </div>
            </section> --}}
        </div>
    </div>
</div>
@endsection
