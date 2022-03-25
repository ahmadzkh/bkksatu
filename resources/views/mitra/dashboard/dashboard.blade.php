@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/styleMitra.css">

<style>
    /* CUSTOMIZING GRAFIX */

    .graph-item-wrapper div:nth-child(2) {
        font-size: 50px;
    }

    .row.small-graph {
        --bs-gutter-x: 0;
    }
    /* COSTUMIZING NOTIFICATION */

    .notification-wrapper .notif-item .notif-img {
        width: 50px;
        height: 50px;
        background: #3ad6e7;
    }

    .notification-wrapper .notif-item .notif-content p {
        margin: 0;
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
                <h1 class="fw-bold">Dashboard</h1>
            </div>

            <div class="welcome-admin text-white mb-5">
                <!-- WELCOMING TEXT -->
                <h4>Hello, Welcome Back!</h4>
            </div>

            <!-- INFORMATION ABOUT DATAS -->
            <div class="row small-graph mb-3">
                <div class="col small-graph-item p-1">
                    <div class="graph-item-wrapper p-3 shadow rounded-20 bg-white">
                        <div class="">Rekomendasi Alumni</div>
                        <div class="text-center fw-900">102</div>
                    </div>
                </div>
                <div class="col small-graph-item p-1">
                    <div class="graph-item-wrapper p-3 shadow rounded-20 bg-white">
                        <div class="">Alumni Berkerja</div>
                        <div class="text-center fw-900">54</div>
                    </div>
                </div>
                <div class="col small-graph-item p-1">
                    <div class="graph-item-wrapper p-3 shadow rounded-20 bg-white">
                        <div class="">Lowongan Dibuat</div>
                        <div class="text-center fw-900">12</div>
                    </div>
                </div>
                <div class="col small-graph-item p-1">
                    <div class="graph-item-wrapper p-3 shadow rounded-20 bg-white">
                        <div class="">Lowongan Aktif</div>
                        <div class="text-center fw-900">8</div>
                    </div>
                </div>
            </div>

            <div class="notification-wrapper p-3 rounded-20 shadow">
                <!-- NOTIFIKASI DARI YANG DILAKUIN -->
                <div class="mb-2">
                    <h2 class="d-inline align-middle me-2 fw-bold">Notification</h2><span class="badge bg-danger">20+</span>
                </div>
                <div class="my-4">
                    <!-- NOTIFIKASI ITEMNYA -->
                    <div class="notif-item d-flex justify-content-between my-2">
                        <div class="d-flex">
                            <div class="notif-img rounded-circle"></div>
                            <div class="notif-content mx-2">
                                <p class="title fw-bold">Lowongan Kerja</p>
                                <p class="content fw-bold">Anda telah mendaftar ke lowongan kerja PT. Yutaka Finance. Akan diberitahukan informasi terbaru.</p>
                            </div>
                        </div>
                        <div class="notif-date align-self-center mx-2 fw-bold">27 Feb 2019</div>
                    </div>
                    <div class="notif-item d-flex justify-content-between my-2">
                        <div class="d-flex">
                            <div class="notif-img rounded-circle"></div>
                            <div class="notif-content mx-2">
                                <p class="title">Lowongan Kerja</p>
                                <p class="content">Anda telah mendaftar ke lowongan kerja PT. Yutaka Finance. Akan diberitahukan informasi terbaru.</p>
                            </div>
                        </div>
                        <div class="notif-date align-self-center mx-2">27 Feb 2019</div>
                    </div>
                    <div class="notif-item d-flex justify-content-between my-2">
                        <div class="d-flex">
                            <div class="notif-img rounded-circle"></div>
                            <div class="notif-content mx-2">
                                <p class="title">Lowongan Kerja</p>
                                <p class="content">Anda telah mendaftar ke lowongan kerja PT. Yutaka Finance. Akan diberitahukan informasi terbaru.</p>
                            </div>
                        </div>
                        <div class="notif-date align-self-center mx-2">27 Feb 2019</div>
                    </div>
                    <div class="notif-item d-flex justify-content-between my-2">
                        <div class="d-flex">
                            <div class="notif-img rounded-circle"></div>
                            <div class="notif-content mx-2">
                                <p class="title">Lowongan Kerja</p>
                                <p class="content">Anda telah mendaftar ke lowongan kerja PT. Yutaka Finance. Akan diberitahukan informasi terbaru.</p>
                            </div>
                        </div>
                        <div class="notif-date align-self-center mx-2">27 Feb 2019</div>
                    </div>
                    <div class="notif-item d-flex justify-content-between my-2">
                        <div class="d-flex">
                            <div class="notif-img rounded-circle"></div>
                            <div class="notif-content mx-2">
                                <p class="title">Lowongan Kerja</p>
                                <p class="content">Anda telah mendaftar ke lowongan kerja PT. Yutaka Finance. Akan diberitahukan informasi terbaru.</p>
                            </div>
                        </div>
                        <div class="notif-date align-self-center mx-2">27 Feb 2019</div>
                    </div>
                </div>
                <!-- PINDAH KE NOTIFKASI LEBIH LENGKAP -->
                <div class="text-center">
                    <a href="notification.html" class="btn btn-primary rounded-20">More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
