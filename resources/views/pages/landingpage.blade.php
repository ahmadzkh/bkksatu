@extends('templates.main')
@include('partials.navbar')

@section('title', 'BKK | SMKN 1 KOTA BEKASI')
@section('container')
    <!-- hero -->
    <section class="banner">
        <div class="container position-relative">
            <img src="{{asset ('assets/img/hero2.png')}}" alt="" class="hero2">
            <div class="row">
                <div class="col-lg-7 text-white d-flex flex-column justify-content-center banner-kanan">
                    <div class="row">
                        <div class="col text-banner black">
                            Bursa Kerja Khusus <br> SMKN 1 Kota Bekasi
                        </div>
                        <div class="row">
                            <div class="col desc-banner">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam et autem asperiores
                                possimus suscipit, cumque nemo magnam pariatur vitae saepe.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-block">
                                <a href="/about" class="btn-banner bold">
                                    More About Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 bumi">
                    <img src="{{asset ('assets/img/bumi.png')}}" alt="bumi" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- partner -->
    <section class="partners" id="partner-section">
        <div class="fs-4 text-center bold">
            Our Partners
        </div>
        <div class="container mt-2 mt-lg-5">
            <div class="row">
                <div class="col-6 col-lg-3 d-flex justify-content-center">
                    <a href="#">
                        <img src="{{asset ('assets/img/daihatsu.png')}}" alt="" class="partner-img">
                    </a>
                </div>
                <div class="col-6 col-lg-3 d-flex justify-content-center">
                    <a href="#">
                        <img src="{{asset ('assets/img/toyota.png')}}" alt="" class="partner-img">
                    </a>
                </div>
                <div class="col-6 col-lg-3 d-flex justify-content-center">
                    <a href="#">
                    <img src="{{asset ('assets/img/yamaha.png')}}" alt="" class="partner-img">
                    </a>
                </div>
                <div class="col-6 col-lg-3 d-flex justify-content-center">
                    <a href="#">
                        <img src="{{asset ('assets/img/hyundai.png')}}" alt="" class="partner-img">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <section id="about" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-title black">
                        BKK SMK NEGERI 1 KOTA BEKASI
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A labore aliquid commodi maxime magni.
                        Tenetur cumque molestias similique expedita veniam.
                    </div>
                    <div class="about-btn">
                        <a href="#">See More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #2041BB;">
                                <path
                                    d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset ('assets/img/target.png')}}" alt="" class="about-img">
                            <div class="img-text">
                                <div class="img-title black">
                                    Lorem Ipsum.
                                </div>
                                <div class="img-title-desc medium">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, deserunt.
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="{{asset ('assets/img/poto.png')}}" alt="" class="about-img">
                            <div class="img-text">
                                <div class="img-title black">
                                    Lorem Ipsum.
                                </div>
                                <div class="img-title-desc medium">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, deserunt.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <img src="{{asset ('assets/img/envelope.png')}}" alt="" class="about-img">
                            <div class="img-text">
                                <div class="img-title black">
                                    Lorem Ipsum.
                                </div>
                                <div class="img-title-desc medium">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, deserunt.
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="{{asset ('assets/img/folder.png')}}" alt="" class="about-img">
                            <div class="img-text">
                                <div class="img-title black">
                                    Lorem Ipsum.
                                </div>
                                <div class="img-title-desc medium">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, deserunt.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    <section id="content1" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 position-relative">
                    <img src="{{asset ('assets/img/vector1.png')}}" alt="" class="content-img-bg">
                    <img src="{{asset ('assets/img/laptop.png')}}" alt="" class="content-img img-fluid">
                </div>
                <div class="col-lg-6 d-flex justify-content-center flex-column">
                    <div class="about-title black">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident fuga quo consectetur sit
                        facilis quis consequatur quae laudantium optio perspiciatis!
                    </div>
                    <div class="about-btn">
                        <a href="#">See More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #2041BB;">
                                <path
                                    d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content 2 -->
    <section id="content2" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center flex-column">
                    <div class="about-title black">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="about-desc">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident fuga quo consectetur sit
                        facilis quis consequatur quae laudantium optio perspiciatis!
                    </div>
                    <div class="about-btn">
                        <a href="#">See More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #2041BB;">
                                <path
                                    d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="{{asset ('assets/img/vector2.png')}}" alt="" class="content-img-bg2">
                    <img src="{{asset ('assets/img/laptop.png')}}" alt="" class="content-img img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- berita -->
    <section id="berita" class="">
        <div class="container">
            <div class="row">
                <div class="berita-title black">
                    Artikel Terbaru Dari BKK
                </div>
            </div>
            <div class="mt-4">
                <div class="owl-carousel owl-theme p-2 overflow-hidden">
                    <a href="#" class="text-decoration-none">
                        <div class="card-berita m-3">
                            <div class="atas">
                            </div>
                            <div class="bawah">
                                <div class="bawah-title bold text-black">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="bawah-text medium">
                                    <div class="row">
                                        <div class="col">
                                            Administrator BKK
                                        </div>
                                        <div class="col text-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="fill: rgba(0, 0, 0, .5);transform: translateY(-2px)">
                                                <path
                                                    d="M3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V2h-2v2H9V2H7v2H5a2 2 0 0 0-2 2zm16 14H5V8h14z">
                                                </path>
                                            </svg>
                                            10-21-2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <div class="card-berita m-3">
                            <div class="atas">
                            </div>
                            <div class="bawah">
                                <div class="bawah-title bold text-black">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="bawah-text medium">
                                    <div class="row">
                                        <div class="col">
                                            Administrator BKK
                                        </div>
                                        <div class="col text-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="fill: rgba(0, 0, 0, .5);transform: translateY(-2px)">
                                                <path
                                                    d="M3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V2h-2v2H9V2H7v2H5a2 2 0 0 0-2 2zm16 14H5V8h14z">
                                                </path>
                                            </svg>
                                            10-21-2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <div class="card-berita m-3">
                            <div class="atas">
                            </div>
                            <div class="bawah">
                                <div class="bawah-title bold text-black">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="bawah-text medium">
                                    <div class="row">
                                        <div class="col">
                                            Administrator BKK
                                        </div>
                                        <div class="col text-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="fill: rgba(0, 0, 0, .5);transform: translateY(-2px)">
                                                <path
                                                    d="M3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V2h-2v2H9V2H7v2H5a2 2 0 0 0-2 2zm16 14H5V8h14z">
                                                </path>
                                            </svg>
                                            10-21-2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <div class="card-berita m-3">
                            <div class="atas">
                            </div>
                            <div class="bawah">
                                <div class="bawah-title bold text-black">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="bawah-text medium">
                                    <div class="row">
                                        <div class="col">
                                            Administrator BKK
                                        </div>
                                        <div class="col text-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="fill: rgba(0, 0, 0, .5);transform: translateY(-2px)">
                                                <path
                                                    d="M3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V2h-2v2H9V2H7v2H5a2 2 0 0 0-2 2zm16 14H5V8h14z">
                                                </path>
                                            </svg>
                                            10-21-2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section id="footer">
        <div class="container">
            <div class="row footer">
                <div class="col-lg-3">
                    <img src="{{asset ('assets/img/logobkkbiru.png')}}" alt="">
                    <a href="#" class="d-block mt-4 medium text-decoration-none">
                        info@smkn1kotabekasi.sch.id
                    </a>
                    <div class="medium">
                        0821-2790-7676
                    </div>

                </div>
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div class="footer-title extrabolds">
                        About Us
                    </div>
                    <div class="footer-text mt-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-title extrabolds">
                        About Us
                    </div>
                    <div class="footer-text mt-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-title extrabolds">
                        About Us
                    </div>
                    <div class="footer-text mt-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none text-black-50 semibold">Lorem Ipsum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center text-black-50">
                    Copyright &copy; <span class="bold">RPL SMKN 1 Kota Bekasi</span>
                </div>
            </div>
        </div>
    </section>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="{{asset('/assets/js/jquery.js')}}"></script>
    <script src="{{asset ('/assets/owlcarousel/dist/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                nav: true,
                loop: true,
                margin: 150,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    700: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                },
                autoplay: true,
            });
        });
    </script>
</body>

</html>
@endsection
