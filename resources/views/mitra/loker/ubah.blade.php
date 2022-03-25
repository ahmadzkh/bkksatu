@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/styleMitra.css">
@endsection

@section('section')
    @include('layouts.sidebar-mitra')

    <div class="main-page d-flex">
        @include('layouts.navbar')

        <img src="/assets/img/wave2.svg" class="position-absolute waves">

        <div class="container py-3 content-wrapper">
            <!-- TITLE -->
            <div class="title-page text-white mb-5">
                <h1 class="fw-light">Edit</h1>
                <h1 class="fw-bold">Profile</h1>
            </div>
        </div>
    </div>
@endsection
