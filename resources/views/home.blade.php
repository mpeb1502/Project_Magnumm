@extends('layouts.main')
@section('container')
<div class="row mt-3 p-2">
    <div class="col-md-6 col-sm-12 p-2">
        <img
            src="https://source.unsplash.com/600x300?nature,mountain"
            class="rounded col-sm-12 img-fluid border border-dark"
            style="object-fit: cover"
        />
    </div>
    <div class="col-md-6 col-sm-12 p-3">
        <h1 class="mt-1 mb-4"><b>Wellcome to wisma.com Enjoy read our story</b></h1>
        <h2 class="mb-5 mb-sm-0">
            Take a rest from your job for travel around and chilling.
        </h2>
        <h6 class="mt-4 col-12 mb-sm-0 mt-sm-1">
            Travel around indonesia with view and best experience. We
            provide any request you need for enjoy the read story.
        </h6>
        <a href="/blog" class="btn btn-primary mt-5 mb-3">
            Read Story
        </a>
        <div class="row">
            <div class="col">
                <i class="bi-map"></i>
                <p>25+ Places</p>
            </div>
            <div class="col">
                <i class="bi-book"></i>
                <p>80+ Stories</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 p-2">
    <h1 class="mt-1 mb-4 fs-2 "><b>A collection of scenic photos</b></h1>    
</div>


<div class="col-md-12 col-sm-15 p-2 ">
    <div
        id="carouselExampleIndicators"
        class="carousel slide mb-4 border border-dark"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/600x300?nature,water" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/600x300?nature" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/600x300?merapi" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="col-md-12 col-sm-5 p-5 ">
    <div class="row">
        <div class="row mt-3 p-2">
            <h1 class="mt-1 mb-4 fs-2 "><b>Top Story</b></h1>    
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card border border-dark">
                <img
                    src="https://source.unsplash.com/500x300??nature"
                    class="card-img-top"
                    style="height: 70vh; object-fit: cover"
                />
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <h2 class="mt-5"><b>| Puncak Sawiyah |</b></h2>
            <P class="text-left">Puncak Sawiyah tempat wisata alam di Majalengka yang menawarkan keindahan alam dari ketinggian, seperti area pesawahan, pegunungan serta udara yang sejuk. Suasana yang sejuk dan adem seperti ini sangat dicari oleh mereka yang selalu disibukkan oleh kegiatan sehari-hari. Yang dipercaya dapat membuat mood kita balik lagi, dan kembali semangat dalam bekerja. Wisata di Majalengka yang satu ini cukup diminati oleh siapa saja, terutama bagi mereka yang menyukai keindahan. 
                Lokasi dan Alamat Puncak Sawiyah
                Lokasi Puncak Sawiyah berada di kawasan Taman Nasional Gunung Ceremai (TNGC), tepatnya berada di Desa Sangiang, Kecamatan Banjaran, Kabupaten Majalengka, Jawa Barat. Rute Menuju Puncak Sawiyah
                Akses menuju Puncak Sawiyah hanya dapat dilalui oleh kendaraan roda dua saja, dimana kamu akan menyusuri jalan kecil dan menanjak dengan kondisi yang tidak terlalu bagus.
                Sehingga pastikan kondisi kendaraanmu dalam keadaan baik-baik saja, untuk menghindari hal-hal yang tidak diinginkan nanti.
                Rute yang harus kamu tempuh jika berangkat dari pusat kota Majalengka yakni dengan menuju Jl. Maja-Talaga kemudian belok kiri setelah SPBU Tegalsari.
                Kemudian terus arahkan kendaraan hingga tiba di Desa Tejanulya, di pertigaan menuju Sangiang belok kanan dan belok kiri lagi ketika berada di pertigaan jalan. Setelah bertemu sebuah plang atau papan petunjuk, beloklah ke kiri untuk menuju Puncak Sawiyah. Dimana kondisi jalan selanjutnya tidak begitu bagus dan didominasi dengan tanjakan.
                </P>
            <br />
            <p>
                Story By. Febrian
            </p>
            <a href="/blog" class="btn btn-primary mt-3">Read Story
            </a>
        </div>
    </div>
</div>
@endsection