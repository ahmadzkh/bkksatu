@extends('templates.main')
@section('title', 'BKK 1 | Dashboard Admin')
@section('css')
<link rel="stylesheet" href="{{asset ('/assets/css/style.css')}}" />
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
    /* STYLING TABLE */
    .data-table {
        margin-left: 20px;
        margin-right: 30px;
    }
    .data-table .header button:nth-child(2) i.bxs-plus-circle {
        font-size: 18px;
    }
    .data-table .tools {
        background-color: #2041bb;
        color: #fff;
        font-size: 18px;
    }
    .data-table .content .table {
        overflow-x: scroll;
    }
    .data-table .content ul i.bx {
        font-size: 18px;
    }
    .data-table .content .table tbody tr td.icon {
        display: none;
    }
    .data-table .content .table tbody tr:hover td.icon {
        display: block;
    }
</style>
@endsection
@section('container')
<div class="main-page">
    @include('partials.sidebar-admin')

    <img src="{{asset ('/assets/img/wave2.svg')}}" class="position-absolute waves" />

    <div class="py-3 content-wrapper">
        <!-- TITLE -->
        <div class="title-back">
            <a
                href="#"
                class="d-flex align-items-center text-decoration-none text-white"
                ><i class="bx bx-left-arrow-alt"></i>Back</a
            >
        </div>
        <div class="title-page text-white my-5">
            <h1 class="fw-light">Daftar</h1>
            <h1 class="fw-bold">Alumni</h1>
        </div>

        <div class="alumni-table">
            <!-- SEARCH BAR -->
            <div class="search py-3">
                <form action="" class="position-relative">
                    <i class="bx bx-search position-absolute"></i>
                    <div class="input-group mb-3 px-5">
                        <input
                            type="text"
                            class="form-control rounded-20 shadow"
                            placeholder="Search Alumni..."
                        />
                    </div>
                </form>
            </div>
            <div class="data-table rounded-20 p-2">
                <!-- HEADER ALAT ALAT -->
                <div class="header d-flex justify-content-between mb-3">
                    <button
                        class="btn btn-primary rounded-20 dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        10
                    </button>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton1"
                    >
                        <li><a class="dropdown-item" href="#">10</a></li>
                        <li><a class="dropdown-item" href="#">20</a></li>
                        <li><a class="dropdown-item" href="#">30</a></li>
                    </ul>
                    <a href="/dashboard/alumni/create" class="btn btn-primary rounded-20">
                        <i class="bx bxs-plus-circle align-middle"></i>
                        <p class="d-inline align-middle">Add</p>
                    </a>
                </div>
                <!-- ISI DATA KE TABEL -->
                <div class="content mb-2">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Karir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">1</th>
                                <td>Akwan Cakra</td>
                                <td>192010382</td>
                                <td>RPL</td>
                                <td>2018/2019</td>
                                <td>Berkerja, Kuliah</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">2</th>
                                <td>Fahru Rhman</td>
                                <td>192010383</td>
                                <td>RPL</td>
                                <td>2018/2019</td>
                                <td>Kuliah</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">3</th>
                                <td>Ahmad Zaky</td>
                                <td>192010384</td>
                                <td>TKR</td>
                                <td>2018/2019</td>
                                <td>Berkerja</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">4</th>
                                <td>Fahru Rhman</td>
                                <td>192010383</td>
                                <td>RPL</td>
                                <td>2018/2019</td>
                                <td>Kuliah</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">5</th>
                                <td>Ahmad Zaky</td>
                                <td>192010384</td>
                                <td>TKR</td>
                                <td>2018/2019</td>
                                <td>Berkerja</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">6</th>
                                <td>Fahru Rhman</td>
                                <td>192010383</td>
                                <td>RPL</td>
                                <td>2018/2019</td>
                                <td>Kuliah</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">7</th>
                                <td>Ahmad Zaky</td>
                                <td>192010384</td>
                                <td>TKR</td>
                                <td>2018/2019</td>
                                <td>Berkerja</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">8</th>
                                <td>Fahru Rhman</td>
                                <td>192010383</td>
                                <td>RPL</td>
                                <td>2018/2019</td>
                                <td>Kuliah</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">9</th>
                                <td>Ahmad Zaky</td>
                                <td>192010384</td>
                                <td>TKR</td>
                                <td>2018/2019</td>
                                <td>Berkerja</td>
                            </tr>
                            <tr>
                                <th><input type="checkbox" /></th>
                                <th scope="row">10</th>
                                <td>Ahmad Zaky</td>
                                <td>192010384</td>
                                <td>TKR</td>
                                <td>2018/2019</td>
                                <td>Berkerja</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-end">
                        <ul class="pagination rounded-20">
                            <li class="page-item">
                                <a class="page-link" href="#"
                                    ><i
                                        class="bx bx-chevron-left align-middle"
                                    ></i
                                ></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"
                                    ><i
                                        class="bx bx-chevron-right align-middle"
                                    ></i
                                ></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('script')
<!-- SWEETALERT -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function swalDelete() {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        });
    }
</script>
@endsection
