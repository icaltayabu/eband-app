@extends('layouts.master')

@section('content')
    <div class="page-content" style="background-color: #3B86F8">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8">
                <div class="page-title page-title-small container-fluid ">
                    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>penerbangan anda</h2>
                </div>
                <div class="card header-card " data-card-height="210" style="background-color: #3B86F8">
                    <div class="card-overlay opacity-95"></div>
                </div>
                <div class="card card-style" style="background-color: #ffffff">
                    <div class="content text-center mb-3">
                        <img src="{{ asset('assets/images/eband_featur/personal.png') }}" alt="">
                    </div>
                </div>
                <div class="card card-style" style="background-color: #42D83F">
                    <div class="content text-center mb-3">
                        <h1 style="font-size: 40px; font-style: poppins" class="mt-3 text-white">CITILINK</h1>
                        <h1 style="font-size: 40px; font-style: poppins" class="mt-3 text-white">QG252</h1>
                        <h1 style="font-size: 40px; font-style: poppins" class="mt-3 text-white">TERMINAL 3</h1>
                        <h3 class="text-white">SOEKARNO-HATTA </h3>
                        <h3 class="text-white">INTERNATIONAL AIRPORT</h3>
                        <h1 style="font-size: 40px; font-style: poppins" class="mt-3 text-white">GATE 13</h1>
                        <h1 style="font-size: 40px" class="mt-3 text-white">05.40</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
