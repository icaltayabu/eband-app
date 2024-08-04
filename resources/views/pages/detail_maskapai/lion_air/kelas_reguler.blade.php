@extends('layouts.master')

@section('content')
    <div class="page-content" style="background-color: #3B86F8">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8">
                <div class="page-title page-title-small container-fluid ">
                    <h2><a href="{{ route('kelas_lion_air.index') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Back
                    </h2>
                </div>
                <div class="card header-card " data-card-height="210" style="background-color: #3B86F8">
                    <div class="card-overlay opacity-95"></div>
                </div>
                <div class="card card-style" style="background-color: #ffffff; height: 150px">
                    <div class="content text-center mb-3">
                        <div class="col-lg-12" style="text-align: left;">
                            <img src="{{ asset('assets/images/eband_featur/logo_lion_air.jpg') }}" alt=""
                                style="width: 50px; height: auto;">
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-12"
                                    style="display: flex; flex-direction: column; align-items: flex-start; text-align: left; margin-bottom: 0px">
                                    <div style="display: flex; gap: 20px; margin-bottom: 10px; width: 100%;">
                                        <p style="margin: 0; color:black">15.00</p>
                                        <p style="margin: 0; color:black">2 Jam</p>
                                        <p style="margin: 0; color:black; margin-left: auto; margin-right: 20px">18:00
                                        </p>
                                        <p style="margin: 0; color:black; margin-left: auto; margin-right: 20px">
                                            <b>GATE</b>
                                        </p>
                                    </div>
                                    <div style="display: flex; gap: 20px; width: 100%;">
                                        <p style="margin: 0; color:black">CGK</p>
                                        <p style="margin: 0; color:black">========</p>
                                        <p style="margin: 0; color:black">SUB</p>
                                        <p style="margin: 0; color:black; margin-left: auto; margin-right: 30px">
                                            <b>6</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-style" style="background-color: #ffffff; height: 150px">
                    <div class="content text-center mb-3">
                        <div class="col-lg-12" style="text-align: left;">
                            <img src="{{ asset('assets/images/eband_featur/logo_lion_air.jpg') }}" alt=""
                                style="width: 50px; height: auto;">
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-12"
                                    style="display: flex; flex-direction: column; align-items: flex-start; text-align: left; margin-bottom: 0px">
                                    <div style="display: flex; gap: 20px; margin-bottom: 10px; width: 100%;">
                                        <p style="margin: 0; color:black">20.00</p>
                                        <p style="margin: 0; color:black">2 Jam</p>
                                        <p style="margin: 0; color:black; margin-left: auto; margin-right: 20px">23:00
                                        </p>
                                        <p style="margin: 0; color:black; margin-left: auto; margin-right: 20px">
                                            <b>GATE</b>
                                        </p>
                                    </div>
                                    <div style="display: flex; gap: 20px; width: 100%;">
                                        <p style="margin: 0; color:black">SUB</p>
                                        <p style="margin: 0; color:black">========</p>
                                        <p style="margin: 0; color:black">CGK</p>
                                        <p style="margin: 0; color:black; margin-left: auto; margin-right: 30px">
                                            <b>12</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
