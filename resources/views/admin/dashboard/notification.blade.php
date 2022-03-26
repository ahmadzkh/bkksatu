@extends('templates.main')
@section('title', 'BKK 1 | Dashboard Admin')
@section('css')
<link rel="stylesheet" href="{{asset ('/assets/css/style.css')}}">

<style>
    /* CUSTOMIZING TITLE PAGE */
    .title-page h1.fw-bold {
        margin-top: -18px;
        margin-bottom: 0px;
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
    .notification-wrapper .notif-header div div:nth-child(1) {
        width: 50px;
    }
    .notification-wrapper .notif-header div {
        font-size: 18px;
    }
</style>
@endsection

@section('container')
    <div class="main-page">
        <!-- SIDEBAR -->
        @include('partials.sidebar-admin')

        <img src="{{asset ('/assets/img/wave2.svg')}}" class="position-absolute waves">

        <div class="py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-back mb-1 mb-md-4">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white mb-5">
                <h1 class="fw-light d-inline align-middle me-2">Notification</h1><span class="badge bg-danger">20+</span>
                <h1 class="fw-bold">Dashboard</h1>
            </div>

            <div class="notification-wrapper p-3 rounded-20 shadow bg-white">
                <div class="my-4">
                    <!-- NOTIFIKASI ITEM -->
                    <div class="notif-header d-flex justify-content-between my-2">
                        <div class="d-flex">
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="fw-bold">#</p>
                            </div>
                            <div class="notif-content mx-2">
                                <p class="title fw-bold">Deskripsi</p>
                            </div>
                        </div>
                        <div class="notif-date align-self-center mx-2 fw-bold">Tanggal</div>
                    </div>
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
            </div>
        </div>
    </div>
@endsection
