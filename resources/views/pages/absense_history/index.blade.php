@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="px-4 py-3">
        <div style="line-height: 15px;">
            <span class="fw-bold">Data Riwayat</span></br>
            <small style="font-size: 10px;">List data riwayat pengajuan cuti anda</small>
        </div>
    </div>
    <div class="py-1 px-4">
        <div class="card">
            <div class="card-body">
                <table class="table" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Alasan</th>
                            <th>Lama</th>
                            <th>Tanggal Dari</th>
                            <th>Tanggal Sampai</th>
                            <th>Atasan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($absense) == 0)
                        <tr>
                            <td colspan="8" class="text-center">Tidak ada data riwayat pengajuan cuti</td>
                        </tr>
                        @endif
                        @foreach($absense as $index => $val)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $val->jenis }}</td>
                            <td>{{ $val->alasan }}</td>
                            <td>{{ $val->lama }} Hari</td>
                            <td>{{ $val->tgl_dari }}</td>
                            <td>{{ $val->tgl_sampai }}</td>
                            <td>{{ $val->atasan_id }}</td>
                            <td>
                                <div class="rounded text-center {{ $controller->status_format($val->status)['text-color'] }} {{ $controller->status_format($val->status)['bg-color'] }} bg-opacity-10 fw-semibold">
                                    {{ $val->status }}
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