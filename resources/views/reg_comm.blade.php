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
