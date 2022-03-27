@extends('layouts.main')

@section('container')
    <h2 class="text-center my-5">Post Categories</h2>
    <div class="row justify-content-center">
        @foreach ($categories as $category)
            <div class="col-md-3 mb-3">
                <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-light">
                    <div class="card position-relative border border-rounded">
                        <img class="card-img-top" src="https://source.unsplash.com/random/800x800?{{ $category->name }}"
                            alt="{{ $category->name }}">
                        <div class="card-body position-absolute w-100 h-100 row p-0 m-0">
                            <h5 class="card-title text-center align-self-center bg-dark p-2">
                                {{ $category->name }}
                            </h5>
                            {{-- <p class="card-text">{{ $category->description }}</p> --}}
                            {{-- <a href="/categories/{{ $category->slug }}" class="btn btn-primary">See All Posts</a> --}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
