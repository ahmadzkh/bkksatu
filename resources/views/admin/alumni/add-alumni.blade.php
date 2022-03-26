@extends('templates.main')
@section('title', 'BKK 1 | Dashboard Admin')
@section('css')
<link rel="stylesheet" href="{{asset ('/assets/css/style.css')}}">
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

@section('container')
    <div class="main-page">
    @include('partials.sidebar-admin')

    <img src="{{asset ('/assets/img/wave2.svg')}}" class="position-absolute waves">

    <div class="container py-3 content-wrapper">
        <!-- TITLE -->
        <div class="title-back">
            <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
        </div>
        <div class="title-page text-white my-5">
            <h1 class="fw-light">Tambah</h1>
            <h1 class="fw-bold">Alumni</h1>
        </div>

        <div class="edit-wrapper d-flex">
            <div class="data me-4">
                <h3 class="fw-700 mb-2">Data Alumni</h3>
                <!-- FORM INPUTANNYA -->
                <form action="/dashboard/alumni/store" method="POST" class="" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control rounded-15 @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" onkeyup="updateNama(this.value)" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" class="form-control rounded-15 @error('nis') is-invalid @enderror" id="nis" placeholder="NIS" onkeyup="updateNis(this.value)" maxlength="12" name="nis" min="1" max="9999999999">
                        @error('nis')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="number" class="form-control rounded-15 @error('nisn') is-invalid @enderror" id="nisn" placeholder="NISN" onkeyup="updateNisn(this.value)" maxlength="12" name="nisn" min="1" max="99999999999">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select rounded-15 @error('jurusan') is-invalid @enderror" onchange="updateJur(this.value)" name="jurusan">
                            <option selected disabled hidden>Pilih Jurusan</option>
                            @foreach ($jurusan as $jurus)
                                <option value="{{$jurus->id}}">{{$jurus->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Angkatan" class="form-label">Angkatan</label>
                        <select class="form-select rounded-15 @error('angkatan') is-invalid @enderror" onchange="updateAng(this.value)" name="Angkatan">
                            <option selected disabled hidden>Pilih Angkatan</option>
                            @foreach ($angkatan as $ang)
                                <option value="{{$ang->id}}">{{$ang->tahun_masuk}}/{{$ang->tahun_lulus}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="file" name="photo" id="uploadPhoto" accept="image/*" hidden>

                    <!-- TAHUN MASUK TAHUN LULUS DI DATA PENDIDIKAN AMA PEKERJAAN -->
                    {{-- <div class="mb-3">
                        <label for="tahunmasuk" class="form-label">Tahun Masuk</label>
                        <input type="date" class="form-control rounded-15 @error('tahunmasuk')
                            is-invalid
                        @enderror" id="tahunmasuk" onchange="updateTahunmsk(this.value)" name="tahunmasuk" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahunlulus" class="form-label">Tahun Lulus</label>
                        <input type="date" class="form-control rounded-15 @error('tahunlulus')
                            is-invalid
                        @enderror" id="tahunlulus" onchange="updateTahunlls(this.value)" name="tahunlulus" required>
                    </div> --}}
                    <div class="blue-line rounded-20 mb-3"></div>

                    <!-- DATA AKUN -->
                    <h3 class="fw-700 mb-2">Data Akun</h3>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control rounded-15 @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-15 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary fw-700 rounded-15 me-2">Back</a>
                        <button class="btn btn-primary fw-700 rounded-15" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!-- BAGIAN PREVIEW -->
            <div class="preview">
                <h2 class="fw-700 mb-2">Preview</h2>
                <div class="shadow bg-white rounded-20">
                    <div class="header position-relative mb-5">
                        <div class="img rounded-circle position-absolute d-flex justify-content-center align-items-center overflow-hidden">
                            <img src="" id="imagePreview" width="120" draggable="false">
                            <div class="position-absolute upload-image">
                                <label for="uploadPhoto" id="labelPhoto"><i class='bx bxs-image-add'></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="content p-3">
                        <div>
                            <h4 class="fw-bold" id="nama_value">Name</h4>
                        </div>
                        <!-- TABLE PREVIEW -->
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
                            {{-- <tr>
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
                            </tr> --}}
                        </table>
                        <div class="blue-line rounded-20 mb-3"></div>
                        <table>
                            <tr>
                                <td>
                                    <div>
                                        <p class="fw-bold">Username</p>
                                        <p id="nis_value">-</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p class="fw-bold">Level</p>
                                        <p id="nisn_value">Alumni</p>
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
<!-- SCIPRT BUAT PREVIEW -->
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
