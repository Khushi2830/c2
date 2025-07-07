@extends('homeparent')
@section('title', 'Blog')

@section('content1')
  <div class="blog-post mt-2">
    @foreach ($blogs as $blog)
    <div class="card m-2 p-3">


    <div class="blog-title">{{$blog->title}}</div>
    <div class="blog-meta">May 3, 2025 by <a href="#">{{$blog->author}}</a></div>
    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" alt="Monginis Ice Cream Cakes"
      class="blog-image">
    <div class="blog-description">
      {{$blog->content}}

    </div>

    </div>
    @endforeach
    {{ $blogs->links() }}
  </div>
@endsection