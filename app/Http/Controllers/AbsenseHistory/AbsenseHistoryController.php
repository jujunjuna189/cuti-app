<?php

namespace App\Http\Controllers\AbsenseHistory;

use App\Http\Controllers\Controller;
use App\Models\AbsenseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenseHistoryController extends Controller
{
    public function index()
    {
        $absensi = AbsenseModel::where('status', '!=', 'Diajukan')->orderBy('id', 'desc')->get();

        $data['absense'] = $absensi;
        $data['controller'] = $this;

        return view('pages.absense_history.index', $data);
    }

    public function indexAtasan()
    {
        $absensi = AbsenseModel::where('status', '!=', 'Diajukan')->where('atasan_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        $data['absense'] = $absensi;
        $data['controller'] = $this;

        return view('pages.absense_history.indexAtasan', $data);
    }
}
