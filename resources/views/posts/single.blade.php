@extends('layouts.main')

{{-- @dd($blog->toArray()) --}}

@section('container')
    <h2 class="mt-5 mb-3 text-center text-capitalize">{{ $blog->title }}</h2>
    <img class="w-100 mb-3" src="https://source.unsplash.com/random/1600x500?{{ $blog->title }}"
        alt="{{ $blog->title }}">
    <h5>By
        <a href="/posts?author=/{{ $blog->author->username }}"
            class="fw-bold text-decoration-none text-dark">{{ $blog->author->name }}</a>
        In
        <a href="/posts?category=/{{ $blog->category->slug }}"
            class="fw-bold text-decoration-none text-dark">{{ $blog->category->name }}</a>
    </h5>
    <div>
        {!! $blog->content !!}
    </div>
    <a href="/posts" class="text-decoration-none text-dark fw-bold d-block w-100 text-center my-5 fs-4">Back</a>
@endsection
