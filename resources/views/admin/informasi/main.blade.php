@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">

<style>
    .title-page h1.fw-bold {
        margin-bottom: 60px;
    }

    .dropdown-menu {
        min-width: 0px;
    }

    .page-item:first-child .page-link {
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .page-item:last-child .page-link {
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }
    /* STYLING SEARCH */

    .search input {
        height: 60px;
        padding-left: 55px;
        font-size: 18px;
        border: 2px solid rgba(0, 0, 0, 0.2);
    }

    .search i.bx {
        z-index: 10;
        font-size: 30px;
        top: 15px;
        left: 5%;
        color: rgba(0, 0, 0, 0.5);
    }
    /* STYLING NEWS */

    .content .news .header {
        height: 150px;
        border-radius: 15px 15px 0px 0px;
        background-image: linear-gradient(to right, #2145c5, #7a92e4);
    }

    .content .news .header .tools {
        /* transition: 0.3s; */
        visibility: hidden;
    }

    .content .news .header:hover .tools {
        transition: 0.3s;
        visibility: visible;
        background: #7a92e4;
    }

    .content .news .header .tools a,
    .content .news .header .tools span {
        cursor: pointer;
        font-size: 26px;
    }

    .content .news .header .tools span i.bx,
    .content .news .header .tools a i.bx {
        line-height: 0px;
    }

    .content .news .content div {
        font-size: 14px;
    }

    .content.row {
        --bs-gutter-x: 0px;
    }
</style>
@endsection

@section('section')
    <div class="main-page">
        <!-- SIDEBAR -->
        @include('layouts.sidebar-admin')

        <!-- BG WAVES -->
        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Daftar</h1>
                <h1 class="fw-bold">Informasi</h1>
            </div>

            <div class="alumni-table">
                <!-- SEARCH INPUT -->
                <div class="search py-3">
                    <form action="" class="position-relative">
                        <i class='bx bx-search position-absolute'></i>
                        <div class="input-group mb-3 px-5">
                            <input type="text" class="form-control rounded-20 shadow" placeholder="Search News...">
                        </div>
                    </form>
                </div>
                <div class="data-table rounded-20 p-2">
                    <!-- TOMBOL DIATAS DATA NEWS -->
                    <div class="header d-flex justify-content-end mb-3">
                        <button class="btn btn-primary rounded-15"><i class='bx bxs-plus-circle align-middle'></i> <p class="d-inline align-middle">Add</p></button>
                    </div>
                    <!-- DAFTAR NEWS ITEM -->
                    <div class="content mb-3 row">
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-sm-6">
                            <div class="news p-2">
                                <div class="shadow rounded-20 bg-white">
                                    <div class="header d-flex justify-content-center align-items-center">
                                        <div class="tools p-1 rounded-15">
                                            <a href="edit.html" class="text-decoration-none text-white me-2 p-2"><i class='bx bxs-edit align-middle'></i></a>
                                            <span href="#" onclick="swalDelete()" class="text-decoration-none text-white p-2"><i class='bx bxs-trash-alt align-middle'></i></>
                                        </div>
                                    </div>
                                    <div class="content p-3">
                                        <a href="#" class="text-decoration-none text-link-black">
                                            <p class="fw-bold">Pengumuman Adzan subuh 12 Ramadhan</p>
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-1">Administrator BKK</p>
                                            <p class="d-flex justify-content-center align-items-center mb-1"><i class='bx bx-calendar me-1'></i>27 Aug 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PAGINASI NEWS -->
                    </div>
                    <nav class="d-flex justify-content-end">
                        <ul class="pagination rounded-20">
                            <li class="page-item"><a class="page-link" href="#"><i class='bx bx-chevron-left align-middle'></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class='bx bx-chevron-right align-middle'></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- SWEETALERT -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function swalDelete() {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: [true, 'Delete'],
            dangerMode: true
        })
    }
</script>
@endsection
