@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">

<style>
    .title-page h1.fw-bold {
        margin-bottom: 60px;
    }

    /* STYLING DETAIL WRAPPER */

    .rounded-custom {
        border-radius: 30px;
    }

    .detail-outer-wrapper .header {
        border-radius: 30px 30px 0px 0px;
        height: 250px;
        margin-bottom: 70px;
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

    .detail-outer-wrapper .content .pelamar a.btn {
        font-size: 20px;
    }

    .detail-outer-wrapper .header .img {
        background: rgb(192, 192, 192);
        height: 200px;
        width: 200px;
        border: 7px solid #fff;
        top: 50%;
        left: 3%;
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
                <h1 class="fw-bold">Lowongan Kerja</h1>
            </div>

            <!-- CONTENT -->
            <div class="detail-outer-wrapper shadow-custom-2 me-3 mb-5 rounded-custom">
                <!-- HEADER -->
                <div class="header d-flex align-items-center position-relative">
                    <div class="img overflow-hidden position-absolute rounded-circle"><img src="" class=""></div>
                </div>
                <div class="content py-3 px-5">
                    <div class="mb-4 d-flex justify-content-between">
                        <!-- TITLE NEWS -->
                        <div>
                            <h1 class="fw-900 mb-0">IT Support</h1>
                            <h3>LOK00023</h3>
                            <h4 class="mt-3">PT. Optic Gaming<i class='bx bxs-badge-check align-middle text-primary ms-1'></i></h4>
                            <h5 class="mt-3"><i class='bx bx-current-location align-middle me-1'></i>Jakarta</h5>
                        </div>
                        <!-- TOOLS UNTUK EDIT DAN DELETE -->
                        <div class="tools d-flex">
                            <div class="rounded-15 d-flex justify-content-center align-items-center me-1">
                                <a href="#" class="text-white"><i class='bx bxs-edit'></i></a>
                            </div>
                            <div class="rounded-15 d-flex justify-content-center align-items-center">
                                <a href="#" class="text-white"><i class='bx bxs-trash-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- CONTENT INFORMASI -->
                    <div class="mb-3">
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                            nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                    </div>
                    <!-- TOMBOL LIHAT PELAMAR DAN REKOMEND -->
                    <div class="pelamar row">
                        <div class="col p-1">
                            <a href="#" class="btn btn-primary rounded-15 w-100 fw-bold p-2">Lihat Pelamar</a>
                        </div>
                        <div class="col p-1">
                            <a href="#" class="btn btn-primary rounded-15 w-100 fw-bold p-2">Lihat Rekomendasi</a>
                        </div>
                        <div class="col p-1">
                            <a href="#" class="btn btn-primary rounded-15 w-100 fw-bold p-2">Lihat Tahapan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="job-desc">
                <h2 class="fw-900 mb-3">Deskripsi Pekerjaan</h2>
                <div class="shadow-custom-2 px-5 py-4 rounded-20 me-3 mb-5 requirement">
                    <h4 class="fw-bold">Persyaratan :</h4>
                    <ul class="mb-0">
                        <li>Bachelor degree from Computer Science, Business Management, or any related field</li>
                        <li>Minimum 8 years experience as IT Business Partner / IT Business Analyst / IT Project Manager</li>
                        <li>Sehat Jasmani Rohani</li>
                        <li>Experienced in project management, business process mapping, creating pin points, project prioritization, cost and benefit analysis</li>
                    </ul>
                </div>
                <div class="shadow-custom-2 px-5 py-4 rounded-20 me-3 mb-5 responsibility">
                    <h4 class="fw-bold">Tanggung Jawab :</h4>
                    <ul class="mb-0">
                        <li>Can make a coffe.</li>
                        <li>Can piket in midnight.</li>
                        <li>Dapat membersihkan tempat kerja sendiri.</li>
                        <li>Bisa membuat anak.</li>
                    </ul>
                </div>
                <div class="shadow-custom-2 px-5 py-4 rounded-20 me-3 mb-5 phase">
                    <h4 class="fw-bold mb-3">Tahap :</h4>
                    <div class="row">
                        <div class="col-6">
                            <p class="fw-bold mb-0">Tes Fisik</p>
                            <p>Dilaksanankan pada 28 April 2018</p>
                        </div>
                        <div class="col-6">
                            <p class="fw-bold mb-0">Tes Psikotek & Krapelin</p>
                            <p>Dilaksanankan pada 1 Mei 2018</p>
                        </div>
                        <div class="col-6">
                            <p class="fw-bold mb-0">Interview</p>
                            <p>Dilaksanankan pada 9 Mei 2018</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="more-info">
                <h2 class="fw-900 mb-3">Informasi Tambahan</h2>
                <div class="shadow-custom-2 px-5 py-4 rounded-20 me-3 mb-5 phase">
                    <div class="row p-2">
                        <div class="col-6 mb-3">
                            <h5 class="fw-bold mb-0">Level</h5>
                            <h5 class="fw-normal">Menengah</h5>
                        </div>
                        <div class="col-6 mb-3">
                            <h5 class="fw-bold mb-0">Jenis Pekerjaan</h5>
                            <h5 class="fw-normal">Penuh waktu</h5>
                        </div>
                        <div class="col-6 mb-3">
                            <h5 class="fw-bold mb-0">Pengalaman</h5>
                            <h5 class="fw-normal">1 tahun</h5>
                        </div>
                        <div class="col-6 mb-3">
                            <h5 class="fw-bold mb-0">Spesialisasi</h5>
                            <h5 class="fw-normal">IT/Web developer/Computer science</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
