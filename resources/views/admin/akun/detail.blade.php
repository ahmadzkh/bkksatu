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
        height: 150px;
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
</style>
@endsection

@section('section')
    <div class="main-page">
        @include('layouts.sidebar-admin')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="container py-3 content-wrapper">
            <div class="title-back">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Detail</h1>
                <h1 class="fw-bold">Alumni</h1>
            </div>

            <div class="detail-outer-wrapper shadow-custom-2 rounded-20">
                <div class="header">
                </div>
                <div class="content py-3 px-5">
                    <div class="mb-4 d-flex justify-content-between">
                        <h2 class="fw-900">tysonngo</h2>
                        <div class="tools d-flex">
                            <div class="rounded-15 d-flex justify-content-center align-items-center me-1">
                                <a href="#" class="text-white"><i class='bx bxs-edit'></i></a>
                            </div>
                            <div class="rounded-15 d-flex justify-content-center align-items-center">
                                <a href="#" class="text-white"><i class='bx bxs-trash-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">NIS</h5>
                            <p>192010382</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p>tysonngo@mail.com</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Level</h5>
                            <p>Alumni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
