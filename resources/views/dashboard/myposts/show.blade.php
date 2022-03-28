@extends('dashboard.layouts.main')

@section('container')
    <h2 class="mt-5 mb-3 text-center text-capitalize">{{ $post->title }}</h2>
    <img class="w-100 mb-3" src="https://source.unsplash.com/random/1600x500?{{ $post->category->name }}"
        alt="{{ $post->title }}">
    <div>
        {!! $post->content !!}
    </div>
    <a href="/dashboard/posts" class="text-decoration-none text-dark fw-bold d-block w-100 text-center my-5 fs-4">Back</a>
@endsection
