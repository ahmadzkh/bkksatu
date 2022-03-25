@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">

<style>
    .title-page h1.fw-bold {
        margin-bottom: 120px;
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
    /* STYLING TABLE */

    .data-table {
        margin-left: 20px;
        margin-right: 30px;
    }

    .data-table .header button:nth-child(2) i.bxs-plus-circle {
        font-size: 18px;
    }

    .data-table .tools {
        background-color: #2041BB;
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

@section('section')
    <div class="main-page">
        <!-- SIDEBAR -->
        @include('layouts.sidebar-admin')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-back">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Tahap</h1>
                <h1 class="fw-bold">LOK00023</h1>
            </div>

            <div class="alumni-table">
                <div class="header d-flex justify-content-between mb-3 px-5">
                    <div class="">
                        <h3 class="fw-bold mb-0">Tahap</h3>
                        <p>Berikut ini adalah data tahapan-tahapan.</p>
                    </div>
                    <div>
                        <button class="btn btn-primary rounded-15 px-4"><p class="d-inline align-middle fw-bold">Add</p></button>
                    </div>
                </div>
                <div class="data-table rounded-20 py-2 px-4">
                    <!-- ISI DATATABLE -->
                    <div class="content mb-2">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Loker</th>
                                    <th scope="col">Tahap Ke</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Dimulai</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>LOK00023</td>
                                    <td>1</td>
                                    <td>Tes Fisik</td>
                                    <td>27-03-2019</td>
                                    <td>Selesai</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>LOK00023</td>
                                    <td>2</td>
                                    <td>Tes Krapelin</td>
                                    <td>30-03-2019</td>
                                    <td>Sedang Berjalan</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>LOK00023</td>
                                    <td>3</td>
                                    <td>Interview</td>
                                    <td>01-04-2019</td>
                                    <td>Belum</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
            buttons: true,
            dangerMode: true,
        })
    }
</script>
@endsection
