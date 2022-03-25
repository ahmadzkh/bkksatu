@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<!-- SELECT 2 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
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
<body>
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
                <h1 class="fw-light">Penelusuran</h1>
                <h1 class="fw-bold">Alumni</h1>
            </div>

            <div class="alumni-table">
                <div class="alumni-graph">
                    <!-- SELECT ANGKATAN BUAT SEARCH -->
                    <div class="search mb-4">
                        <h3 class="fw-bold px-5 text-center">Rekayasa Perangkat Lunak</h3>
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
                                    <h4 class="fw-700 me-2 mb-0">Grafik karir alumni RPL - 2021/2022</h4>
                                </div>
                                <canvas id="myChart" height="97px"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- TABLE ALUMNI YANG KULIAH-->
                    <div class="mb-3 pe-3">
                        <div class="data-table rounded-20 p-2 shadow-custom-2">
                            <div class="header m-2">
                                <button class="btn btn-primary rounded-20"><i class='bx bxs-printer align-middle'></i> <p class="d-inline align-middle">Print</p></button>
                            </div>
                            <div class="content mb-2">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Berkerja</th>
                                            <th scope="col">Kuliah</th>
                                            <th scope="col">Wirausaha</th>
                                            <th scope="col">Angkatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">1</th>
                                            <td>Akwan Cakra</td>
                                            <td>PT. Yutaka Finance</td>
                                            <td>Politeknik Semarang</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                            <!-- <td class="icon"><i class='bx bxs-star'></i> <i class='bx bx-edit'></i> <i class='bx bxs-trash-alt'></i></td> -->
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">2</th>
                                            <td>Fahri Rhamn</td>
                                            <td>-</td>
                                            <td>Politeknik Semarang</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">3</th>
                                            <td>Ahmad Zaky</td>
                                            <td>PT. Yutaka Finance</td>
                                            <td>Politeknik Semarang</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">4</th>
                                            <td>Sultheng</td>
                                            <td>-</td>
                                            <td>Politeknik Semarang</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">5</th>
                                            <td>Aesterisk</td>
                                            <td>PT. Yutaka Finance</td>
                                            <td>Politeknik Negeri Jakarta</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">6</th>
                                            <td>Reza Rahadian</td>
                                            <td>PT. WIKA</td>
                                            <td>Politeknik Negeri Jakarta</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">7</th>
                                            <td>Melisa</td>
                                            <td>PT. Astra Motors</td>
                                            <td>Politeknik Bandung</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">8</th>
                                            <td>Mutia Mamas</td>
                                            <td>PT. Allianz Finance</td>
                                            <td>Politeknik Bandung</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">9</th>
                                            <td>Cristiano Dolado</td>
                                            <td>PT. Akebocor</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th scope="row">10</th>
                                            <td>Mesut Fajar</td>
                                            <td>-</td>
                                            <td>Universitas Brawijaya</td>
                                            <td>-</td>
                                            <td>2018/2019</td>
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
            labels: ['Rekayasa Perangkat Lunak'],
            datasets: [{
                label: 'Bekerja',
                data: [23],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Kuliah',
                data: [32],
                backgroundColor: [
                    'rgba(54, 162, 238, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 238, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Wirausaha',
                data: [7],
                backgroundColor: [
                    'rgba(70, 238, 98, 0.2)',
                ],
                borderColor: [
                    'rgba(70, 238, 98, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Tidak Tertelusuri',
                data: [2],
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
