@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">All Stories</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-info border-info " type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card border-info mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?nature,mountain{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">By.<a
                            href="/blog?author={{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        in
                        <a
                            href="/blog?category={{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <div class="wow">
                    <button>
                        <a href="/posts/{{ $posts[0]->slug }}"class="text-white text-decoration-none">Read more</a>
                    </button>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card border-info">
                            <div class="position-absolute bg-dark px-3 py-2 " style="background-color:rgba(0,0,0,0.7) ">
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <div style="max-height: 120px; overflow:hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">
                                </div>
                            @else
                                <div style="max-height: 120px; overflow:hidden">
                                    <img src="https://source.unsplash.com/1200x400?nature,mountain{{ $post->category->name }}"
                                        alt="{{ $post->category->name }}" class="img-fluid ">
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->slug }}</h5>
                                <small class="text-muted">By.<a
                                        href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <div class="wow">
                                    <button><a href="/posts/{{ $post->slug }}" class="text-white text-decoration-none" >Read more</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif
    <div class="d-flex  justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection