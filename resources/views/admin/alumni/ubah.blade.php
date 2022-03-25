@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<style>
    .title-page h1.fw-bold {
        margin-bottom: 120px;
    }

    .edit-wrapper .data form {
        width: 50vw;
    }

    .edit-wrapper .data form button {
        width: 100px;
    }

    .edit-wrapper .preview {
        width: 45vw;
    }

    .edit-wrapper .preview .content table {
        width: 100%;
    }

    .edit-wrapper .preview .header {
        border-radius: 15px 15px 0px 0px;
        width: 100%;
        background-image: linear-gradient(to right, #96aeff, #3759d6);
        height: 100px;
    }

    .edit-wrapper .preview .header .img {
        border: 4px solid #fff;
        width: 120px;
        height: 120px;
        background: rgb(128, 128, 128);
        top: 30px;
        left: 20px;
    }
    /* STYLING CUSTOM FILE INPUT */

    .edit-wrapper .preview .header .img #uploadPhoto {
        opacity: 0;
        position: absolute;
        z-index: -1;
    }

    .edit-wrapper .preview .header .img label {
        cursor: pointer;
        color: #fff;
        font-size: 60px;
    }

    .edit-wrapper .preview .header .upload-image {
        visibility: hidden;
    }

    .edit-wrapper .preview .header .img:hover .upload-image {
        visibility: visible;
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
                <h1 class="fw-light">Ubah</h1>
                <h1 class="fw-bold">Alumni</h1>
            </div>

            <div class="edit-wrapper d-flex">
                <div class="data me-4">
                    <!-- FORM INPUTAN -->
                    <h2 class="fw-700 mb-2">Data</h2>
                    <form action="" class="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-15" id="nama" placeholder="Nama..." onkeyup="updateNama(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="number" class="form-control rounded-15" id="nis" onkeyup="updateNis(this.value)" maxlength="12">
                        </div>
                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="number" class="form-control rounded-15" id="nisn" onkeyup="updateNisn(this.value)" maxlength="12">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select rounded-15" onchange="updateJur(this.value)">
                                <option selected disabled hidden>Pilih Jurusan</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                <option value="Multimedia">Multimedia</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="angakatan" class="form-label">Angakatan</label>
                            <select class="form-select rounded-15" onchange="updateAng(this.value)">
                                <option selected disabled hidden>Pilih Angakatan</option>
                                <option value="2015/2016">2015/2016</option>
                                <option value="2016/2017">2016/2017</option>
                                <option value="2017/2018">2017/2018</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tahunmasuk" class="form-label">Tahun Masuk</label>
                            <input type="date" class="form-control rounded-15" id="tahunmasuk" onchange="updateTahunmsk(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="tahunlulus" class="form-label">Tahun Lulus</label>
                            <input type="date" class="form-control rounded-15" id="tahunlulus" onchange="updateTahunlls(this.value)">
                        </div>
                        <div class="blue-line rounded-20 mb-3"></div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary fw-700 rounded-15 me-2">Cancel</button>
                            <button class="btn btn-primary fw-700 rounded-15">Save</button>
                        </div>
                </div>
                <!-- HASIL DARI INPUTAN DITARO DI PREVIEW -->
                <div class="preview">
                    <h2 class="fw-700 mb-2">Preview</h2>
                    <div class="shadow bg-white rounded-20">
                        <div class="header position-relative mb-5">
                            <div class="img rounded-circle position-absolute d-flex justify-content-center align-items-center overflow-hidden">
                                <img src="" id="imagePreview" width="120" draggable="false">
                                <div class="position-absolute upload-image">
                                    <label for="uploadPhoto" id="labelPhoto"><i class='bx bxs-image-add'></i></label>
                                    <input type="file" name="photo" id="uploadPhoto" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="content p-3">
                            <div>
                                <h4 class="fw-bold" id="nama_value">Name</h4>
                            </div>
                            <table>
                                <tr>
                                    <td>
                                        <div>
                                            <p class="fw-bold">NIS</p>
                                            <p id="nis_value">-</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p class="fw-bold">NISN</p>
                                            <p id="nisn_value">-</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Jurusan</p>
                                            <p id="jurusan_value">-</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Angakatan</p>
                                            <p id="angakatan_value">-</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Tahun Masuk</p>
                                            <p id="tahunmasuk_value">-</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Tahun Lulus</p>
                                            <p id="tahunlulus_value">-</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    uploadPhoto.onchange = evt => {
        const [file] = uploadPhoto.files;
        let label = document.getElementById("labelPhoto");
        let input = document.getElementById("uploadPhoto");

        if (file) {
            imagePreview.src = URL.createObjectURL(file);
        }
    }

    function updateNama(data) {
        document.getElementById("nama_value").innerHTML = data;
    }

    function updateNis(data) {
        document.getElementById("nis_value").innerHTML = data;
    }

    function updateNisn(data) {
        document.getElementById("nisn_value").innerHTML = data;
    }

    function updateJur(data) {
        document.getElementById("jurusan_value").innerHTML = data;
    }

    function updateAng(data) {
        document.getElementById("angakatan_value").innerHTML = data;
    }

    function updateTahunmsk(data) {
        document.getElementById("tahunmasuk_value").innerHTML = data;
    }

    function updateTahunlls(data) {
        document.getElementById("tahunlulus_value").innerHTML = data;
    }
</script>
@endsection
