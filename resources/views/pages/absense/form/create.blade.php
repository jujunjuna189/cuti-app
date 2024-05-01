@extends('components.layouts_app')
@section('content')
<div class="p-2">
    <div class="py-4 px-4 d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-header bg-white d-flex justify-content-between">
                <span class="fw-bold text-dark">Isi Pengajuan Cuti Anda</span>
                <div class="border border-dark px-2 rounded"><a href="{{route('absense')}}" class="small text-dark text-decoration-none">Lihat pengajuan cuti</a></div>
            </div>
            <div class="card-body" style="font-size: 13px;">
                <form action="{{ route('absense-form-store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group mb-2">
                        <label for="jenis">Jenis cuti yang diambil</label>
                        <select name="jenis" id="jenis" class="form-control" onchange="onGetAlasan(this)">
                            <option value="" data-id="" disabled selected>--Pilih jenis cuti--</option>
                            @foreach($absensi_jenis as $val)
                            <option value="{{$val->jenis}}" data-id="{{$val->id}}">{{$val->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis">Alasan cuti</label>
                        <select name="alasan" id="alasan" class="form-control" required>
                            <option value="" data-id="" disabled selected>--Pilih alasan cuti--</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis">Lama Cuti</label>
                        <input type="text" name="lama" id="lama" placeholder="..." class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis">Tanggal Dari</label>
                        <input type="date" name="tgl_dari" id="tgl_dari" placeholder="..." class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis">Tanggal Sampai</label>
                        <input type="date" name="tgl_sampai" id="tgl_sampai" placeholder="..." class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="atasan_id">Atasan</label>
                        <select name="atasan_id" id="atasan_id" class="form-control">
                            <option value="" disabled selected>--Pilih atasan--</option>
                            @foreach($atasan as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <button type="button" class="btn border-dark fw-semibold" style="font-size: 14px;">Kembali</button>
                        <button type="submit" class="btn btn-dark text-warning fw-semibold" style="font-size: 14px;">Ajukan Cuti</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    const onGetAlasan = (data) => {
        var id = $(data).find(':selected').data('id');
        $.ajax({
            url: '<?= route("reason-get-by-jenis") ?>',
            type: "GET",
            dataType: 'json',
            data: {
                "absensi_jenis_id": id,
            },
            headers: {
                'X-CSRF-TOKEN': token,
            },
            success: function(data) {
                $('#alasan').empty();
                $('#alasan').append('<option value="" data-id="" disabled selected>--Pilih alasan cuti--</option>');
                data.forEach((item) => {
                    var html = '<option value="' + item.alasan + '">' + item.alasan + '</option>';
                    $('#alasan').append(html);
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
@endsection