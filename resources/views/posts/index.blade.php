@extends('layouts.main')

{{-- @dd($blogs->toArray()) --}}
@section('container')
    <div class="row  mt-5">
        <div class="col-md-6">
            <h2 class="text-left">{{ $title }}</h2>
            <p class="fs-6 text-left mt-0 mb-4">{{ $result }} Results</p>
        </div>
        <div class="col-md-6">
            <form action="/posts">
                <div class="input-group">
                    @if (@request('category'))
                        <input type="hidden" name="category" value="{{ @request('category') }}">
                    @endif
                    @if (@request('author'))
                        <input type="hidden" name="author" value="{{ @request('author') }}">
                    @endif
                    <input type="text border border-secondary" class="form-control" placeholder="Search here.."
                        name="search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
                <div class="mt-2 d-flex justify-content-end">
                    {{ $blogs->links() }}
                </div>
            </form>
        </div>
    </div>
    @include('layouts.posts')
    <div class="d-flex justify-content-center mt-3">
        {{ $blogs->links() }}
    </div>
@endsection
