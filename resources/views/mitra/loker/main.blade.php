@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/styleMitra.css">

<style>
    /* STYLING SEARCH */

    .search input {
        height: 60px;
        padding-left: 60px;
        font-size: 18px;
        border: 2px solid rgba(0, 0, 0, 0.2);
    }

    .search i.bx {
        z-index: 10;
        font-size: 30px;
        top: 15px;
        left: 6%;
        color: rgba(0, 0, 0, 0.5);
    }
</style>
@endsection

@section('section')
    @include('layouts.sidebar-mitra')

    <div class="main-page d-flex">
        @include('layouts.navbar')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="container py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-page text-white mb-5">
                <h1 class="fw-light">Main</h1>
                <h1 class="fw-bold">Lowongan Kerja</h1>
            </div><a href="#" class="btn btn-primary fw-bold rounded-15">Tambah</a>

            <div class="search py-3">
                <!-- SEARCH BAR -->
                <form action="" class="position-relative">
                    <i class='bx bx-search position-absolute'></i>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control rounded-20 shadow" placeholder="Search Mitra...">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
