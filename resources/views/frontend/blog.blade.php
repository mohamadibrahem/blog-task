@extends('frontend.app')

@section('title') 
    {{ __("Blog") }} 
@endsection

@section('styles')
@endsection

@section('content')
<div class="row my-2">
    <div class="col-md-8">
        <img src="{{ $blog->image->url }}" width="100%" />
        <article class="blog-post">
            <h2 class="blog-post-title">{{ $blog->title }}</h2>
            <p class="blog-post-meta">{{ $blog->publish_date ?? '' }} by <a href="#">{{ $blog->user_by->name ?? '' }}</a></p>
            {!! $blog->content !!}
        </article>
    </div>
</div>
@endsection

@section('scripts')

@endsection
