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
                <h1 class="fw-light">Seleksi Tahap</h1>
                <h1 class="fw-bold">Detail</h1>
            </div>

            <div class="alumni-table">
                <div class="header d-flex justify-content-between mb-3 px-5">
                    <div class="">
                        <h3 class="fw-bold mb-0">Tes Fisik</h3>
                        <p>Berikut ini adalah data alumni yang lolos seleksi Tes Fisik.</p>
                    </div>
                    <div>
                        <button class="btn btn-primary rounded-15 px-4"><p class="d-inline align-middle fw-bold">Print</p></button>
                    </div>
                </div>
                <div class="data-table rounded-20 py-2 px-4">
                    <!-- ISI DATATABLE -->
                    <div class="content mb-2">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">No. Telp</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Akwan Cakra</td>
                                    <td>akwancakra@mail.com</td>
                                    <td>089614721891</td>
                                    <td>598</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ahmad Zaky</td>
                                    <td>zakyamd@mail.com</td>
                                    <td>08981023842</td>
                                    <td>623</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Fahri Rahman</td>
                                    <td>fahri@mail.com</td>
                                    <td>0768342319</td>
                                    <td>612</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Tyson Ngo</td>
                                    <td>tysonngo@mail.com</td>
                                    <td>08961881923</td>
                                    <td>607</td>
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
