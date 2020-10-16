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
    @forelse ($category->products as $pdt)
    <div class="grid-item inspiration js-isotope-item js-grid-item">
        <div class="news-item">
        <img alt="" src="{{asset('/uploads/products/'.$pdt->image)}}">
        <div class="news-hover">
        <div class="hover-border"><div></div></div>
        <div class="content">
        {{-- <div class="time">Dec 15th, 2016</div> --}}
        <h3 class="news-title"><a href="{{url('/design/detail',$pdt->id)}}">{{$pdt->name}}</a></h3>
        <p class="news-description">{{$pdt->description}}</p>
        </div>
        <a class="read-more" href="{{url('/design/detail',$pdt->id)}}">Continue</a>
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
