@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
{{-- <link rel="stylesheet" href="/assets/css/styleMitra.css"> --}}
<style>

</style>
@endsection

@section('section')
{{-- @include('layouts.navbar') --}}
{{-- @include('layouts.sidebar-mitra') --}}
@include('layouts.sidebar-admin')
{{-- USING CONTAINER IF MITRA --}}
<div class="py-3 content-wrapper">
    <div class="title-page">
        <h1 class="fw-light mb-0">Main</h1>
        <h1 class="fw-bold">Dashboard</h1>
    </div>
</div>
@endsection


@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/styleMitra.css">

@endsection
