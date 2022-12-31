@extends('layouts.main')

@section('container')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <div class="kata2" data-aos="fade-down" data-aos-duration="1500">
        <h1 class="mb-5"><b>Kota<span> Daerah</span></b></h1>
    </div>
    

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="/blog?category={{ $category->slug }}">
                        <div class="card border-info text-bg-dark text-white">
                            <img src="img/daerah.jpg?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-4"
                                    style="background-color: rgba(0,0,0,0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
