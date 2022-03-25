@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<!-- TEXTAREA EDITOR -->
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

<style>
    /* STYLING TITLE PAGE */

    .title-page h1.fw-bold {
        margin-bottom: 120px;
    }
    /* WRAPPER FORM */

    .edit-wrapper .data form {
        width: 50vw;
    }

    .edit-wrapper .data form .btn-action button {
        width: 100px;
    }

    .edit-wrapper .preview {
        width: 45vw;
    }

    .edit-wrapper .preview .content .req {
        font-size: 16px;
    }

    .edit-wrapper .preview .content .posted {
        font-size: 14px;
    }
    /* STYLING CUSTOM FILE INPUT */

    .edit-wrapper .data .image {
        background: rgb(187, 187, 187);
        width: 100px;
        height: 100px;
    }

    .edit-wrapper .data .image #uploadPhoto {
        opacity: 0;
        position: absolute;
        z-index: -1;
    }

    .edit-wrapper .data .image label {
        z-index: 10;
        width: 100%;
        height: 100%;
        cursor: pointer;
        color: #fff;
        font-size: 60px;
        top: 10px;
        left: 0;
    }
    /* STYLING TEXTAREA EDITOR */

        :root {
        --ck-border-radius: 5px;
    }

    .ck-file-dialog-button {
        display: none;
    }

    .edit-wrapper .data .image:hover .upload-image {
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
            <!-- TITLE HALAMAN -->
            <div class="title-back">
                <a href="main.html" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Ubah</h1>
                <h1 class="fw-bold">Lowongan Kerja</h1>
            </div>

            <!-- KONTEN LUAR -->
            <div class="edit-wrapper d-flex">
                <div class="data me-4">
                    <!-- DATA INPUTAN -->
                    <h2 class="fw-700 mb-2">Data</h2>
                    <form action="" class="">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control rounded-15" id="title" placeholder="Title..." onkeyup="updateTitle(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi Kerja</label>
                            <input type="text" class="form-control rounded-15" id="lokasi" placeholder="Lokasi Kerja..." onkeyup="updateLokasi(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select rounded-15" onchange="updateKat(this.value)" id="kategori">
                                <option selected disabled hidden>Pilih Kategori</option>
                                <option value="Information and Technologies">Information and Technologies</option>
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Automotive">Automotive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select rounded-15" onchange="updateJur(this.value)" id="jurusan">
                                <option selected disabled hidden>Pilih Jurusan</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="Tata Busana">Tata Busana</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="perusahaan" class="form-label">Perusahaan</label>
                            <select class="form-select rounded-15" onchange="updatePer(this.value)" id="perusahaan">
                                <option selected disabled hidden>Pilih Perusahaan</option>
                                <option value="PT. Yutaka Finance">PT. Yutaka Finance</option>
                                <option value="PT. Akebono">PT. Akebono</option>
                                <option value="PT. Nusa 2 Bangsa">PT. Nusa 2 Bangsa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select class="form-select rounded-15" onchange="updateJk(this.value)" id="jk">
                                <option selected disabled hidden>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="wilayah" class="form-label">Wilayah</label>
                            <select class="form-select rounded-15" onchange="updateWil(this.value)" id="wilayah">
                                <option selected disabled hidden>Pilih Wilayah</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenisPekerjaan" class="form-label">Jenis Pekerjaan</label>
                            <select class="form-select rounded-15" onchange="updateJenisPek(this.value)" id="jenisPekerjaan">
                                <option selected disabled hidden>Pilih Jenis Pekerjaan</option>
                                <option value="Part-Time">Part-Time</option>
                                <option value="Full-Time">Full-Time</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="posisi" class="form-label">Posisi</label>
                            <input type="text" class="form-control rounded-15" id="posisi" placeholder="Posisi..." onkeyup="updatePos(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="kuota" class="form-label">Kuota</label>
                            <input type="number" class="form-control rounded-15" id="kuota" placeholder="Kuota..." onkeyup="updateKuota(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="number" class="form-control rounded-15" id="gaji" placeholder="Gaji..." onkeyup="updateGaji(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="expired" class="form-label">Expired</label>
                            <input type="date" class="form-control rounded-15" id="expired" placeholder="Expired..." onkeyup="updateExp(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="banner" class="form-label" id="bannerLabel">Image for banner</label>
                            <input type="file" class="form-control rounded-15" id="bannerImg">
                            <div class="" id="imgbannerPrev"><img src="" class="w-100 rounded-20" id="bannerPrev" draggable="false"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Images</label>
                            <div class="d-flex">
                                <div class="image rounded-20 text-center overflow-hidden position-relative me-1">
                                    <img src="" id="imagePreview1" width="100" draggable="false">
                                    <div class="upload-image" id="uploadImage1">
                                        <label for="uploadPhoto1" id="labelPhoto1" class="position-absolute"><i class='bx bxs-image-add'></i></label>
                                        <input type="file" name="photo1" id="uploadPhoto1" accept="image/*" class="d-none">
                                    </div>
                                </div>
                                <div class="image rounded-20 text-center overflow-hidden position-relative me-1">
                                    <img src="" id="imagePreview2" width="100" draggable="false">
                                    <div class="upload-image" id="uploadImage2">
                                        <label for="uploadPhoto2" id="labelPhoto2" class="position-absolute"><i class='bx bxs-image-add'></i></label>
                                        <input type="file" name="photo2" id="uploadPhoto2" accept="image/*" class="d-none">
                                    </div>
                                </div>
                                <div class="image rounded-20 text-center overflow-hidden position-relative me-1">
                                    <img src="" id="imagePreview3" width="100" draggable="false">
                                    <div class="upload-image" id="uploadImage3">
                                        <label for="uploadPhoto3" id="labelPhoto3" class="position-absolute"><i class='bx bxs-image-add'></i></label>
                                        <input type="file" name="photo3" id="uploadPhoto3" accept="image/*" class="d-none">
                                    </div>
                                </div>
                                <div class="image rounded-20 text-center overflow-hidden position-relative me-1">
                                    <img src="" id="imagePreview4" width="100" draggable="false">
                                    <div class="upload-image" id="uploadImage4">
                                        <label for="uploadPhoto4" id="labelPhoto4" class="position-absolute"><i class='bx bxs-image-add'></i></label>
                                        <input type="file" name="photo4" id="uploadPhoto4" accept="image/*" class="d-none">
                                    </div>
                                </div>
                                <div class="image rounded-20 text-center overflow-hidden position-relative">
                                    <img src="" id="imagePreview5" width="100" draggable="false">
                                    <div class="upload-image" id="uploadImage5">
                                        <label for="uploadPhoto5" id="labelPhoto5" class="position-absolute"><i class='bx bxs-image-add'></i></label>
                                        <input type="file" name="photo5" id="uploadPhoto5" accept="image/*" class="d-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="req-wrapper">
                            <!-- <div id="main-req"> -->
                            <div class="mb-2">
                                <label class="form-label">Requirements</label>
                                <input type="text" class="form-control rounded-15" id="requirement1" placeholder="Requirement 1..." name="req1">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control rounded-15" id="requirement2" placeholder="Requirement 2..." name="req2">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control rounded-15" id="requirement3" placeholder="Requirement 3..." name="req3">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control rounded-15" id="requirement4" placeholder="Requirement 4..." name="req4">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control rounded-15" id="requirement5" placeholder="Requirement 5..." name="req5">
                            </div>
                            <!-- </div> -->
                        </div>
                        <span class="btn btn-primary rounded-15 mb-3" onclick="addReq()">Tambah Persyaratan</span>
                        <div class="mb-3">
                            <!-- EDITOR CK EDITOR 5 -->
                            <label for="editor" class="mb-2">Deskripsi</label>
                            <textarea name="deskripsi" id="editor">&lt;p&gt;Deskripsi isi lowongan pekerjaan.&lt;/p&gt;</textarea>
                        </div>
                        <div class="blue-line rounded-20 mb-3"></div>
                        <div id="section-wrapper" class="mb-2"></div>
                        <span class="btn btn-primary rounded-15 mb-3" onclick="addSec()">Tambah Tahap</span>
                        <div class="d-flex justify-content-end btn-action">
                            <button class="btn btn-secondary fw-700 rounded-15 me-2">Cancel</button>
                            <button class="btn btn-primary fw-700 rounded-15">Save</button>
                        </div>
                </div>
                <!-- HASIL PREVIEW -->
                <div class="preview">
                    <h2 class="fw-700 mb-2">Preview</h2>
                    <div class="shadow bg-white rounded-20">
                        <div class="content p-4">
                            <div class="mb-4">
                                <img src="../../../assets/img/Pergiin.png" width="160">
                            </div>
                            <div class="mb-3">
                                <h4 class="fw-bold" id="posisi_value">Posisi</h3>
                                    <h6 class="">PT. Pergiin Jaya</h6>
                            </div>
                            <div>
                                <p class="fw-900 mb-0" id="wilayah_value">Wilayah</p>
                                <p class="" id="lokasi_value">Lokasi Kerja</p>
                            </div>
                            <div class="req">
                                <ul>
                                    <li>Persyaratan-persyaratan</li>
                                </ul>
                            </div>
                            <hr>
                            <div class="posted">
                                <p class="mb-0 text-secondary">Tanggal posting.</p>
                            </div>
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
    // MENAMBAH REQUIREMENT JIKA DIKLIK
    var newReqNum = 5;

    function addReq() {
        newReqNum += 1;
        let newReq = "<div class=\"mb-2\"><input type=\"text\" class=\"form-control rounded-15\" id=\"requirement" + newReqNum + "\" placeholder=\"Requirement " + newReqNum + "...\" name=\"req" + newReqNum + "\"></div>"
        document.getElementById("req-wrapper").innerHTML += newReq;
    }

    // MENAMBAH TAHAP JIKA DIKLIK
    let newSecNum = 0;

    function addSec() {
        newSecNum += 1;
        let newSec = "<div class=\"mb-4\"><div class=\"mb-2\"><label class=\"form-label\">Tahap " + newSecNum + "</label><input type=\"number\" class=\"form-control rounded-15\" id=\"sec" + newSecNum + "\" placeholder=\"Tahap Ke...\" name=\"tahapsec" + newSecNum + "\"></div><div class=\"mb-2\"><label class=\"form-label\">Nama Tahap</label><input type=\"text\" class=\"form-control rounded-15\" id=\"namasec" + newSecNum + "\" placeholder=\"Nama Tahap...\" name=\"namasec" + newSecNum + "\"></div><div class=\"mb-2\"><label class=\"form-label\">Tanggal Tahap Dimulai</label><input type=\"date\" class=\"form-control rounded-15\" id=\"datesec" + newSecNum + "\" name=\"datesec" + newSecNum + "\"></div><hr>"
        document.getElementById("section-wrapper").innerHTML += newSec;
    }
    // MANGGIL CK EDITOR
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    // BANNER
    bannerImg.onchange = evt => {
            const [file] = bannerImg.files;
            let label = document.getElementById("bannerLabel");
            let input = document.getElementById("bannerImg");
            var divPrev = document.getElementById("imgbannerPrev");

            if (file) {
                bannerPrev.src = URL.createObjectURL(file);
                imgPreview.src = URL.createObjectURL(file);
                divPrev.classList.add("my-3");
            }
        }
        // UPLOAD GAMBAR 1 2 3
    uploadPhoto1.onchange = evt => {
        const [file] = uploadPhoto1.files;
        let label = document.getElementById("labelPhoto1");
        let input = document.getElementById("uploadPhoto1");
        let wrap = document.getElementById("uploadImage1");

        if (file) {
            imagePreview1.src = URL.createObjectURL(file);
        }
    }
    uploadPhoto2.onchange = evt => {
        const [file] = uploadPhoto2.files;
        let label = document.getElementById("labelPhoto2");
        let input = document.getElementById("uploadPhoto2");

        if (file) {
            imagePreview2.src = URL.createObjectURL(file);
        }
    }
    uploadPhoto3.onchange = evt => {
        const [file] = uploadPhoto3.files;
        let label = document.getElementById("labelPhoto3");
        let input = document.getElementById("uploadPhoto3");

        if (file) {
            imagePreview3.src = URL.createObjectURL(file);
        }
    }

    // SET DAN GET DATA DARI INPUTAN
    function updateTitle(data) {
        let dateNow = new Date();
        let date = dateNow.getFullYear() + '-' + (dateNow.getMonth() + 1) + '-' + dateNow.getDate();

        document.getElementById("title_value").innerHTML = data;
        document.getElementById("created_date_value").innerHTML = date;
    }

    function updateKat(data) {
        document.getElementById("kategori_value").innerHTML = data;
    }
</script>
@endsection
