@extends('layouts.master')

@section('css')
<!-- SELECT 2 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<!-- INTERN CSS -->
<link rel="stylesheet" href="/assets/css/style.css">
<style>
    .title-page h1.fw-bold {
        margin-bottom: 90px;
    }

    .alumni-graph .row {
        margin-right: 0px!important;
    }

    .alumni-graph .graph-item .item {
        height: 150px;
    }

    .alumni-graph .graph-item div p:nth-child(2) {
        margin-top: -15px;
        font-weight: 900;
        font-size: 58px;
    }
    /* STYLING SELECT */

    .select2.select2-container .select2-selection {
        border-radius: 15px;
        border: 1px solid #ccc;
        border-radius: 15px;
        height: 50px;
        outline: none !important;
        transition: all .15s ease-in-out;
    }

    .select2.select2-container .select2-selection .select2-selection__rendered {
        color: #333;
        line-height: 48px;
        padding-right: 33px;
        padding-left: 18px;
        font-size: 18px;
    }

    .select2.select2-container .select2-selection .select2-selection__arrow {
        background: #f8f8f8;
        border-left: 1px solid #ccc;
        -webkit-border-radius: 0 15px 15px 0;
        -moz-border-radius: 0 15px 15px 0;
        border-radius: 0 15px 15px 0;
        height: 48px;
        width: 40px;
    }
    /* STYLING TABLE */

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
        @include('layouts.sidebar-admin')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-back">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>

            <div class="title-page text-white my-5">
                <h1 class="fw-light">Penelusuran</h1>
                <h1 class="fw-bold">Alumni</h1>
            </div>

            <div class="alumni-table">
                <div class="alumni-graph">
                    <!-- SELECT ANGKATAN BUAT SEARCH -->
                    <div class="search mb-4">
                        <h3 class="fw-bold px-5 text-center">Angkatan</h3>
                        <form action="" class="position-relative">
                            <div class="input-group mb-3 px-5">
                                <select class="js-select2 form-control">
                                    <option>2018/2019</option>
                                    <option>2019/2020</option>
                                    <option>2020/2021</option>
                                    <option selected>2021/2022</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- GRAFIK BATANG KARIR ALUMNI -->
                    <div class="mb-3">
                        <div class="pe-3">
                            <div class="bg-white rounded-20 p-3 shadow-custom-2">
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fw-700 me-2 mb-0">Grafik karir alumni - 2021/2022</h4>
                                </div>
                                <canvas id="myChart" height="97px"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- TABLE DATA KARIR JURUSAN -->
                    <div class="mb-3 pe-3">
                        <div class="data-table rounded-20 p-2 shadow-custom-2">
                            <div class="header d-flex justify-content-end mt-2">
                                <button class="btn btn-primary rounded-20"><i class='bx bxs-printer align-middle'></i> <p class="d-inline align-middle">Print</p></button>
                            </div>
                            <div class="content mb-2">
                                <table class="table table-borderless mx-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Jumlah Alumni</th>
                                            <th scope="col">Berkerja</th>
                                            <th scope="col">Kuliah</th>
                                            <th scope="col">Tidak Tertelusuri</th>
                                            <th scope="col">Angkatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Rekayasa Perngankat Lunak</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Teknik Komputer dan Jaringan</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Multimedia</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Teknik Kendaraan Ringan</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Teknik Pengelasan</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Teknik Permesinan</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Akuntansi</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Tata Busana</td>
                                            <td>54</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>2</td>
                                            <td>2018/2019</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- TABLE ALUMNI YANG BERKERJA DIPT-->
                    <div class="mb-3 pe-3">
                        <div class="data-table rounded-20 p-2 shadow-custom-2">
                            <div class="header d-flex justify-content-between align-items-center m-2 mx-4 mt-4">
                                <h4 class="fw-bold">Alumni Berkerja</h4>
                                <button class="btn btn-primary rounded-20"><i class='bx bxs-printer align-middle'></i> <p class="d-inline align-middle">Print</p></button>
                            </div>
                            <div class="content mb-2 mx-4">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Perusahaan</th>
                                            <th scope="col">Berkerja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>PT. Yutaka Finance</td>
                                            <td>43</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav class="d-flex justify-content-end me-2">
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
                    <!-- TABLE ALUMNI YANG KULIAH-->
                    <div class="mb-3 pe-3">
                        <div class="data-table rounded-20 p-2 shadow-custom-2">
                            <div class="header d-flex justify-content-between align-items-center m-2 mx-4 mt-4">
                                <h4 class="fw-bold">Alumni Lanjut Kuliah</h4>
                                <button class="btn btn-primary rounded-20"><i class='bx bxs-printer align-middle'></i> <p class="d-inline align-middle">Print</p></button>
                            </div>
                            <div class="content mb-2 mx-4">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Institusi</th>
                                            <th scope="col">Kuliah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>Universitas Valorant Indonesia</td>
                                            <td>43</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav class="d-flex justify-content-end me-2">
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
            </div>
        </div>
    </div>
@endsection

@section('script')
<!-- CHART JS 3.5.1 -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    $(document).ready(function() {
        $('.js-select2').select2();
    });
    // CHART
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['RPL', 'TKJ', 'MM', 'TB', 'TP', 'TKR', 'AK', 'BB'],
            datasets: [{
                label: 'Bekerja',
                data: [32, 43, 3, 7, 10, 32, 40, 12],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Kuliah',
                data: [12, 32, 5, 5, 2, 3, 12, 20],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Wirausaha',
                data: [12, 32, 5, 5, 2, 3, 12, 20],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Tidak Tertelusuri',
                data: [10, 19, 21, 19, 9, 15, 12, 20],
                backgroundColor: [
                    'rgba(174, 174, 174, 0.2)',
                ],
                borderColor: [
                    'rgba(174, 174, 174, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
