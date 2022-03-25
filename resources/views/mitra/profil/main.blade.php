@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/styleMitra.css">

<style>
    /* STYLING DETAIL WRAPPER */

    .rounded-custom {
        border-radius: 30px;
    }

    .detail-wrapper .header {
        border-radius: 30px 30px 0px 0px;
        height: 250px;
        margin-bottom: 70px;
        background-image: linear-gradient(to right, #2e51d1, #9cb0f0);
    }

    .detail-wrapper .content .prestasi div.img div {
        width: 100px;
        height: 100px;
        background-color: rgb(165, 163, 163);
    }

    .detail-wrapper .content .pelamar a.btn {
        font-size: 20px;
    }

    .detail-wrapper .header .img {
        background: rgb(192, 192, 192);
        height: 200px;
        width: 200px;
        border: 7px solid #fff;
        top: 50%;
        left: 3%;
    }
    /* CUSTOMIZE GALLERY */

    .gallery .img {
        height: 400px;
        width: 100%;
    }

    .gallery .img .big-img div,
    .gallery .img .small-img div {
        height: 100%;
    }

    .gallery .img .big-img div div {
        height: 100%;
        width: 100%;
        background-color: rgb(202, 202, 202);
    }

    .gallery .img .small-img div div {
        height: 100%;
        background-color: rgb(202, 202, 202);
    }

    .row {
        --bs-gutter-x: 0px;
    }
</style>
@endsection

@section('section')
    @include('layouts.sidebar-mitra')

    <div class="main-page d-flex">
        @include('layouts.navbar')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="container py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-page text-white mb-5">
                <h1 class="fw-light">Main</h1>
                <h1 class="fw-bold">Profile</h1>
            </div>

            <div class="detail-wrapper shadow bg-white shadow-custom-2 rounded-custom mb-5">
                <!-- HEADER -->
                <div class="header d-flex align-items-center position-relative">
                    <div class="img overflow-hidden position-absolute rounded-circle"><img src="" class=""></div>
                </div>
                <div class="content py-3 px-5">
                    <div class="mb-4 d-flex justify-content-between">
                        <!-- TITLE NEWS -->
                        <div>
                            <h1 class="fw-900 mb-0">PT. Optic Gaming<i class='bx bxs-badge-check align-middle text-primary ms-1'></i></h1>
                            <h4 class="text-secondary">IT/Automotive</h4>
                            <h4 class="mt-3"></h4>
                            <h5 class="mt-3"><i class='bx bx-current-location align-middle me-1'></i>Jakarta</h5>
                        </div>
                        <!-- TOOLS UNTUK EDIT DAN DELETE -->
                        <div class="tools d-flex">
                            <div class="rounded-15 d-flex justify-content-center align-items-start">
                                <a href="#" class="btn btn-warning text-white rounded-15 fw-bold">Edit</a>
                            </div>
                        </div>
                    </div>
                    <!-- CONTENT INFORMASI -->
                    <div class="mb-3">
                        <h4 class="fw-bold">Overview</h4>
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                            nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                            nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                            nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                    </div>
                </div>
            </div>

            <div class="gallery">
                <h2 class="fw-bold">Gallery</h2>
                <!-- IMAGE INFORMASI -->
                <div class="img row mb-3">
                    <div class="col-8 big-img">
                        <div class="p-2">
                            <div class="rounded-20 p-2"></div>
                        </div>
                    </div>
                    <div class="col-4 row">
                        <div class="col-6 small-img">
                            <div class="p-2">
                                <div class="rounded-20 p-2"></div>
                            </div>
                        </div>
                        <div class="col-6 small-img">
                            <div class="p-2">
                                <div class="rounded-20 p-2"></div>
                            </div>
                        </div>
                        <div class="col-6 small-img">
                            <div class="p-2">
                                <div class="rounded-20 p-2"></div>
                            </div>
                        </div>
                        <div class="col-6 small-img">
                            <div class="p-2">
                                <div class="rounded-20 p-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
