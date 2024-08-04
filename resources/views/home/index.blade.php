@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="page-title page-title-large">
            <h2 style="color: white;">Hy {{ Auth::user()->name }}</h2>
            <h4 style="color: white;">Welcome to eband</h4>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
                data-src="{{ asset('assets/images/avatars/5s.png') }}"></a>
            <h4 style="margin-top: 20px; color:white"><a href="{{ url('personal') }}" style="color: white">Personal
                    dashboard</a></h4>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{ asset('assets/images/pictures/20s.jpg') }}"></div>
        </div>

        <div class="card card-style" style="background-color: #6ea8fd">
            <div class="content text-center mb-3">
                <h3 class="text-white">penerbangan anda</h3>
                <h1 style="font-size: 40px" class="mt-3 text-white">CGK-SUB</h1>
                <h3 class="text-white">selasa 2 juli 2024</h3>
                <h3 class="text-white">QG252 - 05.40 WIB</h3>
                <h1 style="font-size: 40px" class="mt-3 text-white">GATE 13</h1>
            </div>
        </div>
        <div class="card card-style" style="background-color: #1000CA">
            <div class="content text-center mb-3">
                <h3 class="text-white">Waktu Tersisa</h3>
                <h1 style="font-size: 40px" class="mt-3 text-white">1 Jam 2 Menit</h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <a href="{{ url('penerbangan') }}"
                        class="btn btn-primary mt-4 mb-4 w-100 rounded-sm text-uppercase font-900"
                        style="background-color: #5539FF; font-family: 'Poppins', sans-serif;">
                        tambah penerbangan
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <a href="{{ url('chatbot') }}"
                        class="btn btn-primary mt-4 mb-4 w-100 rounded-sm text-uppercase font-900"
                        style="background-color: #9585FA; font-family: 'Poppins', sans-serif;">
                        tanya ke Ai chatbot
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
