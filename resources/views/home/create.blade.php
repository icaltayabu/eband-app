@extends('layouts.master')

@section('content')
    <div class="page-content" style="background-color: #3B86F8">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8">
                <div class="page-title page-title-small container-fluid ">
                    <h2><a href="{{ route('home.index') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Back</h2>
                </div>
                <div class="card header-card " data-card-height="210" style="background-color: #3B86F8">
                    <div class="card-overlay opacity-95"></div>
                </div>
                <a href="{{ route('kelas_citilink.index') }}">
                    <div class="card card-style" style="background-color: #ffffff">
                        <div class="content text-center mb-3">
                            <img src="{{ asset('assets/images/eband_featur/citilink.png') }}" alt="">
                        </div>
                    </div>
                </a>
                <a href="{{ route('kelas_garuda.index') }}">
                    <div class="card card-style" style="background-color: #ffffff">
                        <div class="content text-center mb-3">
                            <img src="{{ asset('assets/images/eband_featur/garuda.png') }}" alt="">
                        </div>
                    </div>
                </a>
                <a href="{{ route('kelas_lion_air.index') }}">
                    <div class="card card-style" style="background-color: #ffffff">
                        <div class="content text-center mb-3">
                            <img src="{{ asset('assets/images/eband_featur/lion_air.png') }}" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
