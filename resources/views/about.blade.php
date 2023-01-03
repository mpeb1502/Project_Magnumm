@extends('layouts.main')

@section('container')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <div data-aos="fade-down" data-aos-duration="1500" class="kata2">
            <h1><b>About<span> Us</span></b></h1>
        </div>
    <div data-aos="fade-right" data-aos-duration="1500">
        <h3>Selamat Datang di Wisma.com!!!.
            <p>Website Wisma ini kami buat dengan sengaja untuk forum artikel yang menyediakan tentang kisah perjalan liburan di berbagai daerah indonesia</p>   
            <p>dengan adanya website anda bisa mencari lokasi wisata yang menarik yang ingin anda kunjungi bersama keluarga atau orang-orang tercinta.</p>
        </h3>
    </div>
    <div data-aos="fade-left" data-aos-duration="1500">
        
    </div>

    <img src="img/team.png" width="250"class="m-auto">
<div class="row mt-4">
        <h1 class="text-center mb-3"><p><b>Our Team dev</b></p></h1>
        <div class="col-md-3 col-sm-10">
            <div class="card border border-dark">
                <img
                    src="img/komuk.png"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Febrian Fauzan Rachman-Team Lead</h5>
                    <p class="card-text">203040057</p>
                    <ul class="nav justify-content-end">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border border-dark">
                <img
                    src="img/komuk.png"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Alif Luqman Hakim | Front-End</h5>
                    <p class="card-text">203040046</p>
                    <ul class="nav justify-content-end">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border border-dark">
                <img
                    src="img/komuk.png"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Ikhsan Rachmat Alghifari | Back-End</h5>
                    <p class="card-text">203040042</p>
                    <ul class="nav justify-content-end">
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border border-dark">
                <img
                    src="img/komuk.png"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">Yusuf Wahyu Syahroni | Front-End</h5>
                    <p class="card-text">203040052</p>
                    <ul class="nav justify-content-end">
                    </ul>
                </div>
            </div>
        </div>
</div>

    <div class="row mt-5 justify-content-center">
        <h1 class="text-center mb-4 "><b>Contact Us</b></h1>
        <div class="col-md-5 col-sm-12">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header text-center">Contact</div>
                <div class="card-body">
                    <p class="card-text">
                        If you have any questions, please send them via the form
                        below. We will try to answer your questions.
                    </p>
                </div>
            </div>
            <div class="mb-3">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2015785999074!2d107.59059581487186!3d-6.866431369089696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sen!2sid!4v1639199288259!5m2!1sen!2sid"
                width="510"
                height="305"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                ></iframe>
            </div >
        </div>
        <div class="col-md-5 text-left">
            <form action="https://formsubmit.co/wisatamagnum@gmail.com" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputText" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                        >Email Address</label
                    >
                    <input type="email" name="email" class="form-control" id="exampleInputText" />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                        >Telephone</label
                    >
                    <input type="tel" name="telephone" class="form-control" id="exampleInputText" />
                </div>
                <label for="exampleInputEmail1" class="form-label">Message</label>
                <div class="form-floating">
                    <textarea
                    name="message"
                        class="form-control"
                        placeholder="Leave a comment here"
                        id="floatingTextarea2"
                        style="height: 100px"
                    ></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
                <button type="submit" class="btn btn-primary mt-3 text-dark ">Submit</button>
            </form>
        </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection