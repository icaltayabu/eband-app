@extends('layouts.master')

@section('content')
    <div class="page-content" style="background-color: #3B86F8">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8">
                <div class="page-title page-title-small container-fluid ">
                    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Back</h2>
                    <h4 class="text-white mt-3" style="margin-left: 35px">tambahkan penerbangan</h4>
                </div>
                <div class="card header-card " data-card-height="210" style="background-color: #3B86F8">
                    <div class="card-overlay opacity-95"></div>
                </div>
                <div class="card card-style" style="background-color: #ffffff">
                    <div class="content text-center mb-3">
                        <img src="{{ asset('assets/images/eband_featur/citilink.png') }}" alt="">
                    </div>
                </div>
                <div class="card card-style" style="background-color: #ffffff">
                    <div class="content text-center mb-3">
                        <img src="{{ asset('assets/images/eband_featur/garuda.png') }}" alt="">
                    </div>
                </div>
                <div class="card card-style" style="background-color: #ffffff">
                    <div class="content text-center mb-3">
                        <img src="{{ asset('assets/images/eband_featur/lion_air.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
