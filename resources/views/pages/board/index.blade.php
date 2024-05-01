@extends('components.layouts_app')
@section('content')
<div class="position-absolute top-0 bottom-0 start-0 end-0 bg-dark">
    <div>
        <div class="mb-3 text-center" style="margin-top: 5rem;">
            <img src="{{ asset('assets/pus_dist/logo/logo-mono.png') }}" alt="" width="200"><br>
            <small class="text-center fw-bold text-white" style="font-size: 10px;">By Horizon Tasikmalaya</small>
        </div>
        <div class="text-center">
            <span class="text-white fw-bold h5">Selamat Datang Di Aplikasi Cuti</span><br>
            <span class="text-white fw-bold h5">Horizon Tasikmalaya</span>
        </div>
    </div>
</div>
<div class="p-2 position-absolute top-0 bottom-0 start-0 end-0" style="background-image: url(<?= asset('assets/pus_dist/img/img-cover.jpeg') ?>); background-position: cover; background-repeat: no-repeat; background-size: 100% 100%; opacity: 0.3;"></div>
@endsection