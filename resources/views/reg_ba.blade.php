@extends('layouts.register_layout')

@push('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('ba_post') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <a href="{{ route('ba_get') }}">
                                    <img src="{{ asset('images/shvr_logo.png') }}" width="400" alt="" srcset="">
                                </a>
                            </div>
                        </div>

                        <div class="text-center" style="font-size: 20px; font-weight: bold; margin-bottom: 20px">
                            <span>SHVR COLONIES 2020 BRAND AMBASSADOR</span>
                            <br>
                            <span>REGISTRATION FORM</span>
                        </div>

                        @include('flash::message')

                        <input type="hidden" name="config" id="config" value="ba">

                        <div class="form-group row">
                            <label for="full_name" class="col-md-6 col-form-label text-md-left">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="off">
                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-6 col-form-label text-md-left">Instagram</label>
                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" required autocomplete="off">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-left">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-6 col-form-label text-md-left">HP / Telp</label>
                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="off">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-6 col-form-label text-md-left">Jenis Kelamin</label>
                            <div class="col-md-6">
                                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-6 col-form-label text-md-left">Alamat Lengkap</label>
                            <div class="col-md-6">
                                <textarea name="address" id="address" cols="30" rows="3" class="form-control @error('address') is-invalid @enderror" required></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-6 col-form-label text-md-left">Provinsi</label>
                            <div class="col-md-6">
                                <select name="province" id="province" class="form-control @error('province') is-invalid @enderror"></select>
                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-6 col-form-label text-md-left">Kota</label>
                            <div class="col-md-6">
                                <select name="city" id="city" class="form-control @error('city') is-invalid @enderror"></select>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-6 col-form-label text-md-left">Kode Pos</label>
                            <div class="col-md-6">
                                <input id="postal_code" type="number" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" required autocomplete="off">
                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job" class="col-md-6 col-form-label text-md-left">Pekerjaan</label>
                            <div class="col-md-6">
                                <input id="job" type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{ old('job') }}" required autocomplete="off">
                                @error('job')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_1" class="col-md-6 col-form-label text-md-left">Kamu mengetahui acara ini dari siapa?</label>
                            <div class="col-md-6">
                                <input id="question_1" type="text" class="form-control @error('question_1') is-invalid @enderror" name="question_1" value="{{ old('question_1') }}" required autocomplete="off">
                                @error('question_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_2" class="col-md-6 col-form-label text-md-left">Apakah kamu tertarik menjadi brand ambassador GG SHVR?</label>
                            <div class="col-md-6">
                                <select name="question_2" id="question_2" class="form-control @error('question_2') is-invalid @enderror">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                                @error('question_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_3" class="col-md-6 col-form-label text-md-left">Apakah kamu suka datang ke acara party/clubbing?</label>
                            <div class="col-md-6">
                                <select name="question_3" id="question_3" class="form-control @error('question_3') is-invalid @enderror">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                                @error('question_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_4" class="col-md-6 col-form-label text-md-left">Apakah kamu merokok?</label>
                            <div class="col-md-6">
                                <select name="question_4" id="question_4" class="form-control @error('question_4') is-invalid @enderror">
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                                @error('question_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_5" class="col-md-6 col-form-label text-md-left">Apakah kamu mengetahui & menggunakan produk GG SHVR?</label>
                            <div class="col-md-6">
                                <select name="question_5" id="question_5" class="form-control @error('question_5') is-invalid @enderror">
                                    <option value="Ya saya tahu dan menggunakan produk GG SHVR">Ya saya tahu dan menggunakan produk GG SHVR</option>
                                    <option value="Ya saya tahu tapi tidak menggunakan produk GG SHVR">Ya saya tahu tapi tidak menggunakan produk GG SHVR</option>
                                    <option value="Saya tidak tahu dan tidak menggunakan produk GG SHVR">Saya tidak tahu dan tidak menggunakan produk GG SHVR</option>
                                </select>
                                @error('question_5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_6" class="col-md-6 col-form-label text-md-left">Berapa kali kamu biasanya hangout/party dalam sebulan</label>
                            <div class="col-md-6">
                                <select name="question_6" id="question_6" class="form-control @error('question_6') is-invalid @enderror">
                                    <option value="1 Kali">1 Kali</option>
                                    <option value="2 Kali">2 Kali</option>
                                    <option value="3 Kali">3 Kali</option>
                                    <option value="Lebih dari 3 kali">Lebih dari 3 kali</option>
                                </select>
                                @error('question_6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_7" class="col-md-6 col-form-label text-md-left">Sebutkan tempat hangout/party di kota kalian yg biasa kalian kunjungi</label>
                            <div class="col-md-6">
                                <textarea name="question_7" id="question_7" cols="30" rows="3" class="form-control @error('question_7') is-invalid @enderror" required></textarea>
                                @error('question_7')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_8" class="col-md-6 col-form-label text-md-left">Sebutkan 5 nama Local DJ favorit kalian</label>
                            <div class="col-md-6">
                                <textarea name="question_8" id="question_8" cols="30" rows="3" class="form-control @error('question_8') is-invalid @enderror" required></textarea>
                                @error('question_8')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_9" class="col-md-6 col-form-label text-md-left">Sebutkan 5 nama International DJ favorit kalian</label>
                            <div class="col-md-6">
                                <textarea name="question_9" id="question_9" cols="30" rows="3" class="form-control @error('question_9') is-invalid @enderror" required></textarea>
                                @error('question_9')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_10" class="col-md-6 col-form-label text-md-left">Produk rokok apa yang kamu konsumsi sekarang ini?</label>
                            <div class="col-md-6">
                                <input id="question_10" type="text" class="form-control @error('question_10') is-invalid @enderror" name="question_10" value="{{ old('question_10') }}" required autocomplete="off">
                                @error('question_10')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_11" class="col-md-6 col-form-label text-md-left">Tuliskan secara singkat profil diri kamu</label>
                            <div class="col-md-6">
                                <textarea name="question_11" id="question_11" cols="30" rows="3" class="form-control @error('question_11') is-invalid @enderror" required></textarea>
                                @error('question_11')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_12" class="col-md-6 col-form-label text-md-left">Tuliskan secara singkat alasan kamu, kenapa kamu tertarik ingin menjadi brand ambassador GG SHVR</label>
                            <div class="col-md-6">
                                <textarea name="question_12" id="question_12" cols="30" rows="3" class="form-control @error('question_12') is-invalid @enderror" required></textarea>
                                @error('question_12')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_13" class="col-md-6 col-form-label text-md-left">Kalau kamu terpilih sebagai brand ambassador GG SHVR, apa yang akan kamu lakukan untuk menaikan brand GG SHVR</label>
                            <div class="col-md-6">
                                <textarea name="question_13" id="question_13" cols="30" rows="3" class="form-control @error('question_13') is-invalid @enderror" required></textarea>
                                @error('question_13')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{ url('/') }}" class="float">
    <i class="fa fa-arrow-left fa-lg my-float"></i>
</a>
@endsection
