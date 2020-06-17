@extends('layouts.register_layout')

@push('custom_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

{{-- @push('custom_js')
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
@endpush --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('comm_post') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <a href="{{ route('comm_get') }}">
                                    <img src="{{ asset('images/shvr_logo.png') }}" width="400" alt="" srcset="">
                                </a>
                            </div>
                        </div>

                        <div class="text-center" style="font-size: 20px; font-weight: bold; margin-bottom: 20px">
                            <span>SHVR COLONIES 2020 COMMUNITY</span>
                            <br>
                            <span>REGISTRATION FORM</span>
                        </div>

                        @include('flash::message')

                        <input type="hidden" name="config" id="config" value="comm">

                        {{-- <div class="form-group row">
                            <label for="community_name" class="col-md-6 col-form-label text-md-left">Test</label>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="community_name" class="col-md-6 col-form-label text-md-left">Nama Komunitas <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="community_name" type="text" class="form-control @error('community_name') is-invalid @enderror" name="community_name" value="{{ old('community_name') }}" required autocomplete="off">
                                @error('community_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="community_city" class="col-md-6 col-form-label text-md-left">Kota</label>
                            <div class="col-md-6">
                                <select name="community_city" id="community_city" class="form-control @error('community_city') is-invalid @enderror">
                                </select>
                                @error('community_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-6 col-form-label text-md-left">Instagram <span class="required">*</span></label>
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
                            <label for="youtube" class="col-md-6 col-form-label text-md-left">Youtube</label>
                            <div class="col-md-6">
                                <input id="youtube" type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ old('youtube') }}" autocomplete="off">
                                @error('youtube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="soundcloud_mixcloud" class="col-md-6 col-form-label text-md-left">Soundcloud/Mixcloud</label>
                            <div class="col-md-6">
                                <input id="soundcloud_mixcloud" type="text" class="form-control @error('soundcloud_mixcloud') is-invalid @enderror" name="soundcloud_mixcloud" value="{{ old('soundcloud_mixcloud') }}" autocomplete="off">
                                @error('soundcloud_mixcloud')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-left">Email <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-6 col-form-label text-md-left">Telp/PIC Komunitas <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="off">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="community_created" class="col-md-6 col-form-label text-md-left">Tanggal Komunitas Dibuat <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="community_created" type="text" class="form-control @error('community_created') is-invalid @enderror" name="community_created" value="{{ old('community_created') }}" required autocomplete="off">
                                @error('community_created')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="member_1" class="col-md-6 col-form-label text-md-left">Anggota 1 <span class="required">*</span></label>
                            <div class="col-md-2">
                                <input id="member_1" type="text" class="form-control @error('member_1') is-invalid @enderror" name="member_1" value="{{ old('member_1') }}" required autocomplete="off" placeholder="Nama">
                                @error('member_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <input id="member_1_instagram" type="text" class="form-control @error('member_1_instagram') is-invalid @enderror" name="member_1_instagram" value="{{ old('member_1_instagram') }}" required autocomplete="off" placeholder="Instagram">
                            </div>
                            <div class="col-md-2">
                                <input id="member_1_role" type="text" class="form-control @error('member_1_role') is-invalid @enderror" name="member_1_role" value="{{ old('member_1_role') }}" required autocomplete="off" placeholder="Role">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="member_2" class="col-md-6 col-form-label text-md-left">Anggota 2</label>
                            <div class="col-md-2">
                                <input id="member_2" type="text" class="form-control @error('member_2') is-invalid @enderror" name="member_2" value="{{ old('member_2') }}" autocomplete="off" placeholder="Nama">
                                @error('member_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <input id="member_2_instagram" type="text" class="form-control @error('member_2_instagram') is-invalid @enderror" name="member_2_instagram" value="{{ old('member_2_instagram') }}" autocomplete="off" placeholder="Instagram">
                            </div>
                            <div class="col-md-2">
                                <input id="member_2_role" type="text" class="form-control @error('member_2_role') is-invalid @enderror" name="member_2_role" value="{{ old('member_2_role') }}" autocomplete="off" placeholder="Role">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="member_3" class="col-md-6 col-form-label text-md-left">Anggota 3</label>
                            <div class="col-md-2">
                                <input id="member_3" type="text" class="form-control @error('member_3') is-invalid @enderror" name="member_3" value="{{ old('member_3') }}" autocomplete="off" placeholder="Nama">
                                @error('member_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <input id="member_3_instagram" type="text" class="form-control @error('member_3_instagram') is-invalid @enderror" name="member_3_instagram" value="{{ old('member_3_instagram') }}" autocomplete="off" placeholder="Instagram">
                            </div>
                            <div class="col-md-2">
                                <input id="member_3_role" type="text" class="form-control @error('member_3_role') is-invalid @enderror" name="member_3_role" value="{{ old('member_3_role') }}" autocomplete="off" placeholder="Role">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="member_4" class="col-md-6 col-form-label text-md-left">Anggota 4</label>
                            <div class="col-md-2">
                                <input id="member_4" type="text" class="form-control @error('member_4') is-invalid @enderror" name="member_4" value="{{ old('member_4') }}" autocomplete="off" placeholder="Nama">
                                @error('member_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <input id="member_4_instagram" type="text" class="form-control @error('member_4_instagram') is-invalid @enderror" name="member_4_instagram" value="{{ old('member_4_instagram') }}" autocomplete="off" placeholder="Instagram">
                            </div>
                            <div class="col-md-2">
                                <input id="member_4_role" type="text" class="form-control @error('member_4_role') is-invalid @enderror" name="member_4_role" value="{{ old('member_4_role') }}" autocomplete="off" placeholder="Role">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="member_5" class="col-md-6 col-form-label text-md-left">Anggota 5</label>
                            <div class="col-md-2">
                                <input id="member_5" type="text" class="form-control @error('member_5') is-invalid @enderror" name="member_5" value="{{ old('member_5') }}" autocomplete="off" placeholder="Nama">
                                @error('member_5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2">
                                <input id="member_5_instagram" type="text" class="form-control @error('member_5_instagram') is-invalid @enderror" name="member_5_instagram" value="{{ old('member_5_instagram') }}" autocomplete="off" placeholder="Instagram">
                            </div>
                            <div class="col-md-2">
                                <input id="member_5_role" type="text" class="form-control @error('member_5_role') is-invalid @enderror" name="member_5_role" value="{{ old('member_5_role') }}" autocomplete="off" placeholder="Role">
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="xxxxxx" class="col-md-6 col-form-label text-md-left">xxxxxx</label>
                            <div class="col-md-6">
                                <textarea name="xxxxxx" id="xxxxxx" cols="30" rows="3" class="form-control @error('xxxxxx') is-invalid @enderror" required></textarea>
                                @error('xxxxxx')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="question_1" class="col-md-6 col-form-label text-md-left">Kamu mengetahui acara ini dari siapa? <span class="required">*</span></label>
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
                            <label for="question_2" class="col-md-6 col-form-label text-md-left">Apakah komunitas terlibat dengan program acara brand lain di 2020?</label>
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
                            <label for="question_3" class="col-md-6 col-form-label text-md-left">Seberapa sering komunitas kalian, membuat acara atau event dalam sebulan?</label>
                            <div class="col-md-6">
                                <select name="question_3" id="question_3" class="form-control @error('question_3') is-invalid @enderror">
                                    <option value="1 Kali">1 Kali</option>
                                    <option value="Kurang dari 1 kali">Kurang dari 1 kali</option>
                                    <option value="Lebih dari 1 kali">Lebih dari 1 kali</option>
                                </select>
                                @error('question_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_4" class="col-md-6 col-form-label text-md-left">Apakah kamu mengetahui & menggunakan produk GG SHVR?</label>
                            <div class="col-md-6">
                                <select name="question_4" id="question_4" class="form-control @error('question_4') is-invalid @enderror">
                                    <option value="Ya saya tahu dan menggunakan produk GG SHVR">Ya saya tahu dan menggunakan produk GG SHVR</option>
                                    <option value="Ya saya tahu tapi tidak menggunakan produk GG SHVR">Ya saya tahu tapi tidak menggunakan produk GG SHVR</option>
                                    <option value="Saya tidak tahu dan tidak menggunakan produk GG SHVR">Saya tidak tahu dan tidak menggunakan produk GG SHVR</option>
                                </select>
                                @error('question_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_5" class="col-md-6 col-form-label text-md-left">Sebutkan 5 tempat nongkrong favorit komunitas kalian! <span class="required">*</span></label>
                            <div class="col-md-6">
                                <textarea name="question_5" id="question_5" cols="30" rows="3" class="form-control @error('question_5') is-invalid @enderror" required></textarea>
                                @error('question_5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_6" class="col-md-6 col-form-label text-md-left">Sebutkan 5 DJ lokal favorit komunitas kalian! <span class="required">*</span></label>
                            <div class="col-md-6">
                                <textarea name="question_6" id="question_6" cols="30" rows="3" class="form-control @error('question_6') is-invalid @enderror" required></textarea>
                                @error('question_6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question_7" class="col-md-6 col-form-label text-md-left">Sebulan 5 DJ International favorit komunitas kalian! <span class="required">*</span></label>
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
                            <label for="question_8" class="col-md-6 col-form-label text-md-left">Tuliskan secara singkat profil komunitas kalian! <span class="required">*</span></label>
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
                            <label for="question_9" class="col-md-6 col-form-label text-md-left">Tuliskan alasan kalian, kenapa tertarik ingin menjadi bagian dari komunitas SHVR Colonies? <span class="required">*</span></label>
                            <div class="col-md-6">
                                <textarea name="question_9" id="question_9" cols="30" rows="3" class="form-control @error('question_9') is-invalid @enderror" required></textarea>
                                @error('question_9')
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
