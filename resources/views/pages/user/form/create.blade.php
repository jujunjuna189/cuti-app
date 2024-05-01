@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="py-4 px-4 d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header bg-white d-flex justify-content-between">
                <span class="fw-bold text-dark">Buat Pengguna Baru</span>
            </div>
            <div class="card-body" style="font-size: 13px;">
                <form action="{{ route('user-store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role" value="{{ $role }}">
                    <div class="form-group mb-2">
                        <label for="jenis">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="..." class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis">Username</label>
                        <input type="text" name="email" id="email" placeholder="..." class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis">Kata Sandi</label>
                        <input type="password" name="password" id="password" placeholder="..." class="form-control">
                    </div>
                    <div class="form-group mt-4">
                        <button type="button" class="btn border-dark fw-semibold" style="font-size: 14px;" onclick="window.open('<?= url()->previous() ?>', '_self')">Kembali</button>
                        <button type="submit" class="btn btn-dark text-warning fw-semibold" style="font-size: 14px;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection