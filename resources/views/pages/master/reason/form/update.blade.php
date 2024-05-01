@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="py-4 px-4 d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header bg-white d-flex justify-content-between">
                <span class="fw-bold text-dark">Ubah Alasan Pengajuan</span>
            </div>
            <div class="card-body" style="font-size: 13px;">
                <form action="{{ route('reason-update-store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $reason->id }}">
                    <div class="form-group mb-2">
                        <label for="absensi_jenis_id">Jenis Pengajuan</label>
                        <select name="absensi_jenis_id" id="absensi_jenis_id" class="form-control" required>
                            <option value="{{ $reason->absensi_jenis_id }}" disabled selected>{{ $reason->absense_jenis_model->jenis }}</option>
                            @foreach($type as $val)
                            @if($val->id != $reason->absensi_jenis_id)
                            <option value="{{$val->id}}">{{$val->jenis}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alasan">Alasan</label>
                        <input type="text" name="alasan" id="alasan" value="{{ $reason->alasan }}" required placeholder="..." class="form-control">
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