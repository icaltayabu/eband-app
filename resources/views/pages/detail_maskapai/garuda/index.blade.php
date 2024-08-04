@extends('layouts.master')

@section('content')
    <div class="page-content" style="background-color: #3B86F8; margin-bottom: 0px">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8;">
                <div class="page-title page-title-small container-fluid mb-1">
                    <h2><a href="{{ url('penerbangan') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Back</h2>
                </div>
                <a href="{{ url('kelas_reguler_garuda') }}">
                    <div class="w3-row-padding">
                        <div class="w3-third">
                            <div class="w3-card">
                                <img src="{{ asset('assets/images/eband_featur/reguler_kelas1.png') }}"
                                    style="width:100%; border-radius: 10px">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ url('kelas_vip_garuda') }}">
                    <div class="w3-row-padding mt-4">
                        <div class="w3-third">
                            <div class="w3-card">
                                <img src="{{ asset('assets/images/eband_featur/vip_kelass1.png') }}"
                                    style="width:100%; border-radius: 10px">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
