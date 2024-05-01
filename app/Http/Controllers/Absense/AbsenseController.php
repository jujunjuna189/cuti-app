<?php

namespace App\Http\Controllers\Absense;

use App\Http\Controllers\Controller;
use App\Models\AbsenseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenseController extends Controller
{
    public function index()
    {
        $absensi = AbsenseModel::where('status', 'Diajukan')->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        $data['absense'] = $absensi;
        $data['controller'] = $this;

        return view('pages.absense.index', $data);
    }

    public function indexAtasan()
    {
        $absensi = AbsenseModel::where('status', 'Diajukan')->where('atasan_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        $data['absense'] = $absensi;
        $data['controller'] = $this;

        return view('pages.absense.indexAtasan', $data);
    }
}
