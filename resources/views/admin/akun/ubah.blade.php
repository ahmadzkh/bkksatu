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
</style>
@endsection

@section('section')
    <div class="main-page">
        @include('layouts.sidebar-admin')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="container py-3 content-wrapper">
            <div class="title-back">
                <a href="#" class="d-flex align-items-center text-decoration-none text-white"><i class='bx bx-left-arrow-alt'></i>Back</a>
            </div>
            <div class="title-page text-white my-5">
                <h1 class="fw-light">Ubah</h1>
                <h1 class="fw-bold">Akun</h1>
            </div>

            <div class="edit-wrapper d-flex">
                <div class="data me-4">
                    <h2 class="fw-700 mb-2">Data</h2>
                    <form action="" class="">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control rounded-15" id="username" placeholder="Username..." onkeyup="updateUsername(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-15" id="email" placeholder="Email..." onkeyup="updateEmail(this.value)">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-select rounded-15" onchange="updateLevel(this.value)">
                                <option selected disabled hidden>Pilih Level</option>
                                <option value="Alumni">Alumni</option>
                                <option value="Mitra">Mitra</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-15" id="password" placeholder="Password..." onkeyup="updatePassword(this.value)">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary fw-700 rounded-15 me-2">Cancel</button>
                            <button class="btn btn-primary fw-700 rounded-15">Save</button>
                        </div>
                </div>
                <div class="preview">
                    <h2 class="fw-700 mb-2">Preview</h2>
                    <div class="shadow bg-white rounded-20">
                        <div class="header mb-2"></div>
                        <div class="content p-3">
                            <div>
                                <h4 class="fw-bold" id="nama_value">Name</h4>
                            </div>
                            <table>
                                <tr>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Username</p>
                                            <p id="username_value">-</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Email</p>
                                            <p id="email_value">-</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <p class="fw-bold">Level</p>
                                            <p id="level_value">-</p>
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
    function updateUsername(data) {
        document.getElementById("username_value").innerHTML = data;
    }

    function updateEmail(data) {
        document.getElementById("email_value").innerHTML = data;
    }

    function updateLevel(data) {
        document.getElementById("level_value").innerHTML = data;
    }
</script>
@endsection
