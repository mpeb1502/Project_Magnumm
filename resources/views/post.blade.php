@extends ('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a
                        href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                    in
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

                <article class="my-3 fs-5"></article> {!! $post->body !!} </article>


                <div class="wow">
                    <button><a href="/blog" class="text-white text-decoration-none">Back</a></button>
                </div>
                
            </div>
        </div>
    </div>

<button
    type="button"
    class="
        mx-5
        justify-content-end
        btn btn-secondary
        fixed-bottom
        btn-floating btn-lg
        mx-auto
    "
    style="bottom: 5vh; left: 80vw; display: none"
    id="btn-back-to-top"
>
    <p>Up</p>
</button>

<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 300 ||
            document.documentElement.scrollTop > 300
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
@endsection
