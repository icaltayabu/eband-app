@extends('layouts.master')

@section('content')
    <div class="page-content" style="background-color: #3B86F8">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8">
                <div class="page-title page-title-small container-fluid ">
                    <h2><a href="{{ url('penerbangan') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Back</h2>
                </div>
                <div class="card card-style" style="background-color: #ffffff; height: 30px; width: 100px;">
                    <a href="#" data-menu="menu-signup"
                        class="btn btn-xxs mb-3 rounded-s text-uppercase font-900 shadow-s border-green-dark bg-green-light"
                        style="width: 100px;">
                        <i class="fa fa-plus">
                            <span></span>
                        </i>
                    </a><br>
                </div>

                @foreach ($penerbangan as $item)
                    <div class="card card-style" style="background-color: #ffffff; height: 150px">
                        <div class="content text-center mb-3">
                            <div class="col-lg-12" style="text-align: left;">
                                <img src="{{ asset('assets/images/eband_featur/logo_citilink.jpg') }}" alt=""
                                    style="width: 50px; height: auto;">
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-lg-12"
                                        style="display: flex; flex-direction: column; align-items: flex-start; text-align: left; margin-bottom: 0px">
                                        <div style="display: flex; gap: 20px; margin-bottom: 10px; width: 100%;">
                                            <p style="margin: 0; color:black">{{ $item->jam_terbang }}</p>
                                            <p style="margin: 0; color:black">{{ $item->pengingat }}</p>
                                            <p style="margin: 0; color:black; margin-left: auto; margin-right: 20px">06:00
                                            </p>
                                            <p style="margin: 0; color:black; margin-left: auto; margin-right: 20px">
                                                <b>Terminal {{ $item->terminal }}</b>
                                            </p>
                                        </div>
                                        <div style="display: flex; gap: 20px; width: 100%;">
                                            <p style="margin: 0; color:black">{{ $item->asal }}</p>
                                            <p style="margin: 0; color:black">========</p>
                                            <p style="margin: 0; color:black">{{ $item->tujuan }}</p>
                                            <p style="margin: 0; color:black; margin-left: auto; margin-right: 30px">
                                                <b>Gate {{ $item->gate }}</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $penerbangan->links() }}
                </div>

            </div>
        </div>
    </div>

    <div id="menu-signup" class="menu menu-box-modal rounded-m" data-menu-height="460" data-menu-width="325">
        <form action="{{ route('kelas_citilink.store') }}" method="POST">
            @csrf
            <div class="me-3 ms-3 mt-3">
                <h1 class="font-500 font-20 mb-0 text-center">Tambah Penerbangan</h1>
                <form action="">
                    <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                        <div class="col-md-4 position-relative">
                            <label for="tgl_penerbangan" class="form-label">tanggal Penerbangan</label>
                            <input type="date" class="form-control" id="tgl_penerbangan" name="tgl_penerbangan" placeholder="Tanggal">
                        </div>
                    </div>
                    
                    <div style="display: flex; flex-wrap: wrap;">
                        <div class="input-style no-borders has-icon validate-field mb-4 mt-3"
                            style="flex: 1; margin-right: 10px;">
                            <label for="jam_terbang" class="form-label">Jam Terbang</label>
                            <input type="time" class="form-control" id="jam_terbang" name="jam_terbang">
                        </div>
                        <div class="input-style no-borders has-icon validate-field mb-4 mt-3" style="flex: 1;">
                            <label for="kode_penerbangan" class="form-label">Kode Penerbangan</label>
                            <input type="text" class="form-control" id="kode_penerbangan" name="kode_penerbangan"
                                placeholder="Kode Penerbangan">
                        </div>
                    </div>
                    <div class="input-style no-borders has-icon validate-field mb-4 mt-3"
                        style="display: flex; flex-wrap: wrap;">
                        <div class="col-md-4 position-relative" style="flex: 1; margin-right: 10px;">
                            <label for="asal" class="form-label">Asal</label>
                            <select class="form-select form-select-sm" id="asal" name="asal"
                                aria-label="Small select example">
                                <option selected>Pilih</option>
                                <option value="cgk">CGK</option>
                                <option value="sub">SUB</option>
                            </select>
                        </div>
                        <div class="col-md-4 position-relative" style="flex: 1;">
                            <label for="tujuan" class="form-label">Tujuan</label>
                            <select class="form-select form-select-sm" id="tujuan" name="tujuan"
                                aria-label="Small select example">
                                <option selected>Pilih</option>
                                <option value="cgk">CGK</option>
                                <option value="sub">SUB</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-style no-borders has-icon validate-field mb-4 mt-3"
                        style="display: flex; flex-wrap: wrap;">
                        <div class="col-md-4 position-relative" style="flex: 1; margin-right: 10px;">
                            <label for="terminal" class="form-label">Terminal</label>
                            <input type="number" class="form-control" id="terminal" name="terminal"
                                placeholder="Terminal">
                        </div>
                        <div class="col-md-4 position-relative" style="flex: 1;">
                            <label for="gate" class="form-label">Gate</label>
                            <input type="text" class="form-control" id="gate" name="gate"
                                placeholder="Gate">
                        </div>
                    </div>
                    <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                        <div class="col-md-4 position-relative">
                            <label for="pengingat" class="form-label">Pengingat</label>
                            <input type="text" class="form-control" id="pengingat" name="pengingat" placeholder="Pengingat jam">
                        </div>
                    </div>
                    <button type="submit"
                        class="btn btn-full btn-sm shadow-l 
             rounded-s text-uppercase font-900 bg-blue-dark mt-4"
                        style="float: right;">
                        Simpan
                    </button>
                </form>
            </div>
        </form>
    </div>
@endsection
