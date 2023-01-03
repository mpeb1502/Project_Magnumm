@extends ('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3"><b>{{ $post->title }}</b></h1>
                <p><b>By.</b><a
                        href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                    <b>in</b>
                    <a
                        href="/blog?category={{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="iimg-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?nature,mountain{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <p class="text-left">{!! $post->body !!}</p> 


                <div class="wow">
                    <button><a href="/blog" class="text-white text-decoration-none">Back</a></button>
                </div>
                
            </div>
        </div>
    </div>

@endsection
