@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<style>
.title-page h1.fw-bold {
    margin-bottom: 130px;
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
</style>
@endsection

@section('section')
    <div class="main-page">
        <!-- SIDEBAR -->
        @include('layouts.sidebar-admin')
        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Data</h1>
                <h1 class="fw-bold">Alumni</h1>
            </div>

            <div class="alumni-table">
                <!-- GRAFIX BATANG -->
                <div class="alumni-graph">
                    <div class="row mb-3">
                        <div class="bg-white graph-item col">
                            <div class="item rounded-20 p-3 shadow-custom-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">Alumni</p>
                                    <button class="btn btn-primary rounded-20">Lihat Data</button>
                                </div>
                                <p class="text-center">12.043</p>
                            </div>
                        </div>
                        <div class="bg-white graph-item col">
                            <div class="item rounded-20 p-3 shadow-custom-2">
                                <p>Berkerja</p>
                                <p class="text-center">5.403</p>
                            </div>
                        </div>
                        <div class="bg-white graph-item col">
                            <div class="item rounded-20 p-3 shadow-custom-2">
                                <p>Kuliah</p>
                                <p class="text-center">9.342</p>
                            </div>
                        </div>
                        <div class="bg-white graph-item col">
                            <div class="item rounded-20 p-3 shadow-custom-2">
                                <p>Wirausaha</p>
                                <p class="text-center">1.239</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="pe-3">
                            <div class="bg-white rounded-20 p-3 shadow-custom-2">
                                <div class="d-flex align-items-center mb-3">
                                    <h2 class="fw-700 me-2 mb-0">Grafik karir alumni</h2>
                                    <a class="btn btn-primary rounded-20" href="#">Lihat Penelusuran Alumni</a>
                                </div>
                                <canvas id="myChart" height="97px"></canvas>
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
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2016/2017', '2017/2018', '2018/2019', '2019/2020', '2020/2021', '2021/2022'],
            datasets: [{
                label: 'Bekerja',
                data: [32, 43, 3, 7, 10, 32],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Kuliah',
                data: [12, 32, 5, 5, 2, 3],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }, {
                label: 'Wirausaha',
                data: [12, 32, 5, 5, 2, 3],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(153, 102, 255, 1)',
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
