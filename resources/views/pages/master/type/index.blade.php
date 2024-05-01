@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="px-4 py-3 d-flex justify-content-between align-items-center">
        <div style="line-height: 15px;">
            <span class="fw-bold">List Jenis Pengajuan Cuti</span></br>
        </div>
        <div>
            <a href="{{ route('type-create') }}" class="btn btn-dark text-warning py-1" style="font-size: 12px;">Tambah Jenis</a>
        </div>
    </div>
    <div class="py-1 px-4">
        <div class="card">
            <div class="card-body">
                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th style="width: 40px;">No</th>
                            <th>Jenis</th>
                            <th class="text-center" style="width: 150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($type) == 0)
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data tipe pengajuan</td>
                        </tr>
                        @endif
                        @foreach($type as $index => $val)
                        <tr>
                            <td>{{ $index + 1 }}.</td>
                            <td>{{ $val->jenis }}</td>
                            <td>
                                <div class="d-flex justify-content-center" style="gap: 5px">
                                    <a href="{{ route('type-update', ['id' => $val->id]) }}" class="btn border-warning fw-semibold py-1" style="font-size: 12px;">Ubah</a>
                                    <a href="{{ route('type-delete', ['id' => $val->id]) }}" class="btn border-danger fw-semibold py-1" style="font-size: 12px;">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection