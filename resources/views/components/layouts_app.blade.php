<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cuti Apps</title>
</head>

<body class="layout-fluid theme-light" style="font-family: poppins; background: #EEEEEE;">
    <div class="d-flex position-absolute top-0 start-0 end-0 bottom-0">
        <aside class="bg-dark" style="width: 12rem; z-index: 10">
            <div class="w-100 text-warning text-center py-3" style="line-height: 15px;">
                <span class="fw-bold">Cuti App</span></br>
                <small style="font-size: 10px;">By Horizon Tasikmalaya</small>
            </div>
            <div class="mt-3 text-warning fw-bold px-2" style="font-size: 12px;">
                <ul class="list-group">
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('board') ?>', '_self')">
                        Halaman Utama
                    </li>
                </ul>
            </div>
            @if(Auth::user()->role == 0)
            <div class="mt-2 text-warning px-2" style="font-size: 12px;">
                <small>Kelola Pengguna</small>
                <ul class="list-group mt-1 fw-bold">
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('user', ['role' => 1]) ?>', '_self')">
                        Atasan
                    </li>
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('user', ['role' => 2]) ?>', '_self')">
                        Pegawai
                    </li>
                </ul>
            </div>
            @endif
            @if(Auth::user()->role != 2)
            <div class="mt-2 text-warning px-2" style="font-size: 12px;">
                <small>Data Master</small>
                <ul class="list-group mt-1 fw-bold">
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('type') ?>', '_self')">
                        Jenis Pengajuan
                    </li>
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('reason') ?>', '_self')">
                        Alasan Pengajuan
                    </li>
                </ul>
            </div>
            @endif
            @if(Auth::user()->role != 0)
            <div class="mt-2 text-warning px-2" style="font-size: 12px;">
                <small>Pengajuan</small>
                <ul class="list-group mt-1 fw-bold">
                    @if(Auth::user()->role == 2)
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('absense-form') ?>', '_self')">
                        Pengajuan Cuti
                    </li>
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('absense') ?>', '_self')">
                        Data Pengajuan Cuti
                    </li>
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('absense-history') ?>', '_self')">
                        Riwayat
                    </li>
                    @endif
                    @if(Auth::user()->role == 1)
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('absense-atasan') ?>', '_self')">
                        Data Pengajuan Cuti
                    </li>
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('absense-history-atasan') ?>', '_self')">
                        Riwayat
                    </li>
                    @endif
                </ul>
            </div>
            @endif
            <div class="mt-3 text-warning fw-bold px-2" style="font-size: 12px;">
                <ul class="list-group">
                    <li class="list-group-item" style="cursor: pointer;" onMouseOver="this.style.color='#ffc107'; this.style.backgroundColor='#212529'" onMouseOut="this.style.color='#212529'; this.style.backgroundColor='#fff'" onclick="window.open('<?= route('logout') ?>', '_self')">
                        Keluar
                    </li>
                </ul>
            </div>
        </aside>
        <div class="flex-grow-1">
            @yield('content')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="{{ asset('assets/pus_dist/lib/jquery/jquery.min.js') }}"></script>
<script>
    let url = "<?= url('') ?>";
    let token = "<?= Illuminate\Support\Facades\Session::token() ?>";
</script>
@yield('script')

</html>