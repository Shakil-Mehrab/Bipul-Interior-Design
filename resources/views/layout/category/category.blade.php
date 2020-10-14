@extends('layout.app')
@section('title','Grid view - ')
@section('content')
<main class="page-header">
<div class="container"><h1>Latest Thoughts, Ideas & Plans.</h1></div>
</main>
<div class="content">
<div class="projects">
<div class="container">
    <div class="filter-content-3">
        <ul class="filter js-filter">
            <li class="active"><a href="#" data-filter="*">All</a></li>
        </ul>
    </div>
<div class="grid-items js-isotope js-grid-items">
    @forelse ($category->products as $product)
    <div class="grid-item plants js-isotope-item js-grid-item">
        <div class="news-item project-item item-shadow building">
            <img alt="" src="{{asset('/uploads/products/'.$product->image)}}">
            <div class="news-hover project-hover">
                <div class="project-hover"><div></div></div>
                <div class="content project-hover-content news_hover_font_color">
                    <div class="time">{{$product->created_at->diffForHumans()}}</div>
                    <h3 class="news-title"><a href="{{url('/design/detail',$product->id)}}">{{$product->name}}</a></h3>
                    <p class="news-description">{{$product->description}}</p>
                </div>
                <a class="read-more news_hover_font_color" href="{{url('/design/detail',$product->id)}}">Continue</a>
            </div>
        </div>
    </div>
    @empty
    @endforelse
</div>
</div>
</div>
</div>
@endsection
