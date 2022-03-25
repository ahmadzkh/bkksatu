@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">

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
                <h1 class="fw-bold">Informasi</h1>
            </div>

            <!-- CONTENT -->
            <div class="detail-outer-wrapper shadow-custom-2 rounded-20 me-3">
                <!-- HEADER -->
                <div class="header d-flex align-items-center"></div>
                <div class="content py-3 px-5">
                    <div class="mb-4 d-flex justify-content-between">
                        <!-- TITLE NEWS -->
                        <div>
                            <h2 class="fw-900">Pengumuman Adzan subuh 12 Ramadhan</h2>
                            <div class="d-flex">
                                <p class="mb-1 me-5 text-secondary">Administrator BKK</p>
                                <p class="d-flex justify-content-center align-items-center mb-1 text-secondary"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                            </div>
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
                    <!-- CONTENT INFORMASI -->
                    <div class="mb-3">
                        <p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, iure. Expedita, maiores. Cupiditate ducimus fugiat, eligendi illum esse a eaque tempora doloremque voluptatum provident illo, perferendis ea commodi quas aspernatur
                            dolor error architecto delectus officia veniam accusamus impedit repudiandae. Tempora inventore quaerat aut nemo accusantium repellendus assumenda earum eius, quos voluptatem quam quod? Quis fuga culpa adipisci ratione ipsa
                            sed, reiciendis dolorem laboriosam consequuntur officia suscipit inventore ullam incidunt perferendis magni maiores velit neque exercitationem aperiam corporis sunt minus cum iusto? Voluptates amet consequatur, nesciunt quibusdam
                            assumenda doloremque similique, dignissimos velit delectus error culpa debitis, facere quasi sint nostrum eos?</p>
                        <!-- CONTENT INFORMASI -->
                        <div class="mb-3">
                            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                                nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
