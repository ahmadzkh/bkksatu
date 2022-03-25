@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<!-- OWLCAROUSEL -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<style>
    .title-page h1.fw-bold {
        margin-bottom: 60px;
    }

    /* STYLING DETAIL WRAPPER */

    .detail-outer-wrapper .header {
        border-radius: 15px 15px 0px 0px;
        height: 250px;
        background-image: linear-gradient(to right, #2e51d1, #9cb0f0);
    }

    .detail-outer-wrapper .content .prestasi div.img div {
        width: 100px;
        height: 100px;
        background-color: rgb(165, 163, 163);
    }

    .detail-outer-wrapper .content div.tools div {
        width: 30px;
        height: 30px;
        color: #fff;
    }

    .detail-outer-wrapper .content div.tools div:nth-child(1) {
        background: rgb(242, 180, 46);
    }

    .detail-outer-wrapper .content div.tools div:nth-child(2) {
        background: rgb(242, 42, 42);
    }

    .detail-outer-wrapper .content .img {
        height: 300px;
        width: 100%;
    }

    .detail-outer-wrapper .content .img .big-img div,
    .detail-outer-wrapper .content .img .small-img div {
        height: 100%;
    }

    .detail-outer-wrapper .content .img .big-img div div {
        height: 100%;
        width: 100%;
        background-color: rgb(202, 202, 202);
    }

    .detail-outer-wrapper .content .img .small-img div div {
        height: 100%;
        background-color: rgb(202, 202, 202);
    }

    .detail-outer-wrapper .content .row {
        --bs-gutter-x: 0px;
    }
    /* CUSTOMIZING GALLERY */

    .owl-carousel div div.item {
        height: 200px;
        width: 200px;
    }
</style>
@endsection

@section('section')
    <div class="main-page">
        <!-- SIDEBAR -->
        @include('layouts.sidebar-admin')

        <!-- IMAGE WAVES -->
        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-back">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Detail</h1>
                <h1 class="fw-bold">Mitra</h1>
            </div>

            <!-- CONTENT -->
            <div class="detail-outer-wrapper shadow-custom-2 rounded-20 mx-0 mx-md-5 mb-5">
                <div class="header d-flex align-items-center">
                    <!-- HEADER IMAGE DAN BANNER -->
                    <div class="img rounded-circle ms-5"></div>
                </div>
                <!-- ISI DATA-DATANYA -->
                <div class="content py-3 px-5">
                    <div class="mb-4 d-flex justify-content-between">
                        <div>
                            <h2 class="fw-900">PT. Yutaka Finance <i class='bx bxs-badge-check text-primary align-middle'></i></h2>
                        </div>
                        <div class="tools d-flex">
                            <div class="rounded-15 d-flex justify-content-center align-items-center me-1">
                                <a href="#" class="text-white"><i class='bx bxs-edit'></i></a>
                            </div>
                            <div class="rounded-15 d-flex justify-content-center align-items-center">
                                <a href="#" class="text-white"><i class='bx bxs-trash-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 class="fw-bold mb-1">Tentang</h5>
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                            nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p>tysonngo@mail.com</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">No. Telp</h5>
                            <p>0031306665</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Jenis Perusahaan</h5>
                            <p>Perseroan Terbatas (PT)</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Kategori</h5>
                            <p>Informasi dan teknologi</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Tahun Bergabung</h5>
                            <p>2018</p>
                        </div>
                        <div class="col-12">
                            <h5 class="fw-bold mb-1">Alamat</h5>
                            <p>Jl. H. Naim no.67 RT/RW 02/23 Kec. Beruk serdang</p>
                        </div>
                        <hr>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Alumni Melamar</h5>
                            <p>123</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Lowongan Kerja Dibuat</h5>
                            <p>9</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Level</h5>
                            <p>Mitra</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Tanggal Dibuat</h5>
                            <p>22-03-2018</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery mx-0 mx-md-5">
                <h2 class="fw-900 mb-2">Gallery</h2>
                <div class="row owl-carousel">
                    <div class="col-4 col-md-2 mb-2">
                        <div class="item overflow-hidden d-flex justify-content-center align-items-center"><img src="../../../assets/img/Free fire.jpeg" class="rounded-15"></div>
                    </div>
                    <div class="col-4 col-md-2 mb-2">
                        <div class="item overflow-hidden d-flex justify-content-center align-items-center"><img src="../../../assets/img/ascent.png" class="rounded-15"></div>
                    </div>
                    <div class="col-4 col-md-2 mb-2">
                        <div class="item overflow-hidden d-flex justify-content-center align-items-center"><img src="../../../assets/img/bind.jpg" class="rounded-15"></div>
                    </div>
                    <div class="col-4 col-md-2 mb-2">
                        <div class="item overflow-hidden d-flex justify-content-center align-items-center"><img src="../../../assets/img/csgo.jpg" class="rounded-15"></div>
                    </div>
                    <div class="col-4 col-md-2 mb-2">
                        <div class="item overflow-hidden d-flex justify-content-center align-items-center"><img src="../../../assets/img/aqsa.jpg" class="rounded-15"></div>
                    </div>
                    <div class="col-4 col-md-2 mb-2">
                        <div class="item overflow-hidden d-flex justify-content-center align-items-center"><img src="../../../assets/img/Pergiin.png" class="rounded-15"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- OWLCAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            autoWidth: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    })
</script>
@endsection
