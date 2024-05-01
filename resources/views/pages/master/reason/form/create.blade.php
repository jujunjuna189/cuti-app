@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="py-4 px-4 d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header bg-white d-flex justify-content-between">
                <span class="fw-bold text-dark">Tambah Alasan Pengajuan</span>
            </div>
            <div class="card-body" style="font-size: 13px;">
                <form action="{{ route('reason-store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="absensi_jenis_id">Jenis Pengajuan</label>
                        <select name="absensi_jenis_id" id="absensi_jenis_id" class="form-control" required>
                            <option value="" disabled selected>--Pilih jenis pengajuan--</option>
                            @foreach($type as $val)
                            <option value="{{$val->id}}">{{$val->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alasan">Alasan</label>
                        <input type="text" name="alasan" id="alasan" required placeholder="..." class="form-control">
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