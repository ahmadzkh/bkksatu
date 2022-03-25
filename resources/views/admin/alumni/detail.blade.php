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
    height: 250px;
    background-image: linear-gradient(to right, #2e51d1, #9cb0f0);
}

.detail-outer-wrapper .header .img {
    width: 190px;
    height: 190px;
    background-color: rgb(184, 179, 179);
    border: 4px solid #fff;
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
    background: rgb(242, 228, 31);
}

.detail-outer-wrapper .content div.tools div:nth-child(2) {
    background: rgb(242, 180, 46);
}

.detail-outer-wrapper .content div.tools div:nth-child(3) {
    background: rgb(242, 42, 42);
}
</style>
@endsection

@section('section')
    <div class="main-page">
        <!-- SIDEBAR -->
        @include('layouts.sidebar-admin')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="container py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-back">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Detail</h1>
                <h1 class="fw-bold">Alumni</h1>
            </div>

            <div class="detail-outer-wrapper shadow-custom-2 rounded-20 ms-5">
                <div class="header d-flex align-items-center">
                    <!-- HEADER IMAGE DAN BANNER -->
                    <div class="img rounded-circle ms-5"></div>
                </div>
                <!-- ISI DATA-DATANYA -->
                <div class="content py-3 px-5">
                    <div class="mb-4 d-flex justify-content-between">
                        <div>
                            <h2 class="fw-900">Tyson Ngo</h2>
                            <span class="badge bg-secondary align-middle">RPL</span>
                            <span class="badge bg-secondary align-middle">Active</span>
                        </div>
                        <div class="tools d-flex">
                            <div class="rounded-15 d-flex justify-content-center align-items-center me-1">
                                <a href="#" class="text-white"><i class='bx bxs-star'></i></a>
                            </div>
                            <div class="rounded-15 d-flex justify-content-center align-items-center me-1">
                                <a href="#" class="text-white"><i class='bx bxs-edit'></i></a>
                            </div>
                            <div class="rounded-15 d-flex justify-content-center align-items-center">
                                <a href="#" class="text-white"><i class='bx bxs-trash-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5 class="fw-bold mb-1">Tentang</h5>
                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatum tempora omnis reprehenderit voluptate, autem commodi quisquam harum pariatur adipisci obcaecati aut, numquam, ab earum rerum? Nesciunt optio accusamus
                            nisi, iusto animi illum molestias quia labore delectus neque soluta aspernatur!</p>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">NIS</h5>
                            <p>192010382</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">NISN</h5>
                            <p>0031306665</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p>tysonngo@mail.com</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Angakatan</h5>
                            <p>2018/2019</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Jurusan</h5>
                            <p>Rekayasa Perangkat Lunak</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">No. Telepon</h5>
                            <p>089614721891</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Agama</h5>
                            <p>Islam</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Tempat, Tanggal Lahir</h5>
                            <p>Jakarta, 28 Agustus 2003</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Jenis Kelamin</h5>
                            <p>Laki-laki</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Tinggi Badan</h5>
                            <p>174cm</p>
                        </div>
                        <div class="col-4">
                            <h5 class="fw-bold mb-1">Berat Badan</h5>
                            <p>56kg</p>
                        </div>
                        <div class="col-12">
                            <h5 class="fw-bold mb-1">Alamat</h5>
                            <p>Jl. Broadcomm No.533 RT/RW 01/02</p>
                        </div>
                    </div>
                    <div class="mb-3 prestasi">
                        <h5 class="fw-bold mb-2">Prestasi</h5>
                        <div class="row">
                            <div class="col-6">
                                <p class="mb-1 fw-bold">Juara 1 Melanggar Perintah</p>
                                <p class="mb-1">Tingkat Akhirat</p>
                                <p class="mb-1" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam ut magnam minus impedit reiciendis? Sed!</p>
                                <div class="img d-flex">
                                    <div class="rounded-15 me-2"></div>
                                    <div class="rounded-15 me-2"></div>
                                    <div class="rounded-15"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <p class="mb-1 fw-bold">Juara 1 Melanggar Pemerintah</p>
                                <p class="mb-1">Tingkat Kota</p>
                                <p class="mb-1" align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam ut magnam minus impedit reiciendis? Sed!</p>
                                <div class="img d-flex">
                                    <div class="rounded-15 me-2"></div>
                                    <div class="rounded-15 me-2"></div>
                                    <div class="rounded-15"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 nilai">
                        <h5 class="fw-bold">Nilai</h5>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 me-2">Lihat Nilai Rapot, US, dan UN</p>
                            <a href="#" class="btn btn-primary rounded-20" data-bs-toggle="modal" data-bs-target="#nilaiModal">Lihat <i class='bx bx-link-external align-middle'></i></a>
                        </div>
                    </div>
                    <div class="mb-3 status-karir">
                        <div class="">
                            <h5 class="fw-bold">Status Pendidikan</h5>
                            <div class="">
                                <p class="mb-0">Kuliah di Universitas Indonesia</p>
                                <p>2016 ~ 2020</p>
                            </div>
                        </div>
                        <div class="">
                            <h5 class="fw-bold">Status Berkerja</h5>
                            <div class="">
                                <p class="mb-0">Bekerja di PT. Yutaka Finance</p>
                                <p>2018 ~ Sekarang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL BAUT TAMBAH NILAI-->
            <div class="modal fade" id="nilaiModal" tabindex="-1" aria-labelledby="nilaiModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content rounded-20">
                        <div class="modal-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="modal-title fw-bold" id="nilaiModalLabel">Data Nilai</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="nilai-data">
                                <table class="table table-borderless table-rapot">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">S1</th>
                                            <th scope="col">S2</th>
                                            <th scope="col">S3</th>
                                            <th scope="col">S4</th>
                                            <th scope="col">S5</th>
                                            <th scope="col">S6</th>
                                            <th scope="col">Avg</th>
                                            <th scope="col">Ket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Matematika</td>
                                            <td>89</td>
                                            <td>87</td>
                                            <td>93</td>
                                            <td>88</td>
                                            <td>86</td>
                                            <td>90</td>
                                            <td>89</td>
                                            <td>Nilai Rapot</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>89</td>
                                            <td>87</td>
                                            <td>93</td>
                                            <td>88</td>
                                            <td>86</td>
                                            <td>90</td>
                                            <td>89</td>
                                            <td>Nilai Rapot</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bahasa Inggris</td>
                                            <td>89</td>
                                            <td>87</td>
                                            <td>93</td>
                                            <td>88</td>
                                            <td>86</td>
                                            <td>90</td>
                                            <td>89</td>
                                            <td>Nilai Rapot</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless table-us">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Teori</th>
                                            <th scope="col">Praktek</th>
                                            <th scope="col">Avg</th>
                                            <th scope="col">Ket</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Matematika</td>
                                            <td>89</td>
                                            <td>87</td>
                                            <td>89</td>
                                            <td>Nilai Rapot</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>89</td>
                                            <td>87</td>
                                            <td>89</td>
                                            <td>Nilai Rapot</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bahasa Inggris</td>
                                            <td>89</td>
                                            <td>87</td>
                                            <td>89</td>
                                            <td>Nilai Rapot</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
