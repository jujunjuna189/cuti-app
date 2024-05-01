@extends('components.layouts')
@section('content')
<div class="position-absolute start-50 translate-middle" style="top: 20rem;">
    <div class="my-5 text-center">
        <img src="{{ asset('assets/pus_dist/logo/logo.png') }}" alt="" width="200"><br>
        <small class="text-center fw-bold" style="font-size: 10px;">By Horizon Tasikmalaya</small>
    </div>
    <div class="card shadow" style="width: 22rem;">
        <div class="card-body py-4 px-4">
            <div class="d-flex flex-column text-center">
                <span class="text-dark fw-bold">Daftar Akun</span>
                <small>Daftar akun, dan isi dengan lengkap</small>
            </div>
            <form method="POST" action="{{route('on-register')}}">
                @csrf
                <input type="hidden" name="role" value="2">
                <div class="mt-4">
                    <div class="mb-2">
                        <label for="" class="text-dark small">Nama Lengkap</label>
                        <input type="text" name="name" id="name" required placeholder="..." class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="text-dark small">Username</label>
                        <input type="text" name="email" id="email" required placeholder="..." class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="text-dark small">Password</label>
                        <input type="text" name="password" id="password" required placeholder="..." class="form-control">
                    </div>
                </div>
                <div class="mt-4 flex flex-column text-center">
                    <button class="btn btn-dark text-warning w-100 rounded-pill" type="submit">Daftar</button>
                    <div class="mt-1">
                        <small>Sudah punya akun ? <a href="{{ route('login') }}" class="text-dark text-decoration-none fw-medium">Masuk</a></small>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection