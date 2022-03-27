@if ($blogs->count() > 0)
    <div class="row p-0">
        <a href="/posts/{{ $blogs[0]->slug }}" class="text-dark text-decoration-none p-0">
            <div class="row card border border-rounded w-100 p-0">
                <img class="card-img-top m-0 p-0"
                    src="https://source.unsplash.com/random/1600x500?{{ $blogs[0]->category->name }}"
                    alt="{{ $blogs[0]->title }}">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">
                        {{ $blogs[0]->title }}
                    </h5>
                    <small class="text-center d-block w-100">{{ $blogs[0]->created_at->diffForHumans() }}</small>
                    <a class="card-text text-center fs-6 text-decoration-none text-dark d-block w-100 overflow-hidden"
                        href="/posts?author={{ $blogs[0]->author->username }}">
                        By {{ $blogs[0]->author->name }}
                    </a>
                    <a href="/posts?category={{ $blogs[0]->category->slug }}"
                        class="card-text text-center fs-6 text-decoration-none text-dark d-block w-100 overflow-hidden">In
                        <span class="fw-bold">{{ $blogs[0]->category->name }}</span>
                    </a>
                    <p class="card-text text-justify fs-6 text-center">{{ $blogs[0]->exerpt }}</p>
                </div>
            </div>
        </a>
    </div>
    <div class="row justify-content-center w-100 my-3">
        @foreach ($blogs->skip(1) as $post)
            <div class="col-md-3 mb-2">
                <a href="/posts/{{ $post->slug }}" class="text-dark text-decoration-none">
                    <div class="card border border-rounded">
                        <img class="card-img-top"
                            src="https://source.unsplash.com/random/800x800?{{ $post->category->name }}"
                            alt="{{ $post->title }}">
                        <div class="card-body">
                            <h5 style="height: 48px; overflow-y:hidden" class="card-title text-center fw-bold">
                                {{ $post->title }}
                            </h5>
                            <small class="text-center d-block w-100">{{ $post->created_at->diffForHumans() }}</small>
                            <a class="card-text text-center fs-6 text-decoration-none text-dark d-block w-100 overflow-hidden"
                                href="/posts?author={{ $post->author->username }}">
                                By {{ $post->author->name }}
                            </a>
                            <a href="/posts?category={{ $post->category->slug }}"
                                class="card-text text-center fs-6 text-decoration-none text-dark d-block w-100 overflow-hidden">In
                                <span class="fw-bold">{{ $post->category->name }}</span>
                            </a>
                            <p style="height: 47px; overflow-y:auto" class="card-text text-justify fs-6 w-100 mb-3">
                                {{ $post->exerpt }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    @else
        <p class="fs-3 text-center mb-4">No result found..</p>
@endif
