@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="px-4 py-3 d-flex justify-content-between align-items-center">
        <div style="line-height: 15px;">
            <span class="fw-bold">Data Pengguna</span></br>
            <small style="font-size: 10px;">List data pengguna</small>
        </div>
        <div>
            <a href="{{ route('user-create', ['role' => $role]) }}" class="btn btn-dark text-warning py-1" style="font-size: 12px;">Buat Pengguna</a>
        </div>
    </div>
    <div class="py-1 px-4">
        <div class="card">
            <div class="card-body">
                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th class="text-center" style="width: 150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($user) == 0)
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data pengguna</td>
                        </tr>
                        @endif
                        @foreach($user as $index => $val)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>
                                <div class="d-flex justify-content-center" style="gap: 5px">
                                    <a href="{{ route('user-update', ['id' => $val->id]) }}" class="btn border-warning fw-semibold py-1" style="font-size: 12px;">Ubah</a>
                                    <a href="{{ route('user-delete', ['id' => $val->id]) }}" class="btn border-danger fw-semibold py-1" style="font-size: 12px;">Hapus</a>
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