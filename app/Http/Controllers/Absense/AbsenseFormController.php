<?php

namespace App\Http\Controllers\Absense;

use App\Http\Controllers\Controller;
use App\Models\AbsenseAlasanModel;
use App\Models\AbsenseJenisModel;
use App\Models\AbsenseModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AbsenseFormController extends Controller
{
    public function index()
    {
        $absensi_jenis = AbsenseJenisModel::all();
        $user = User::where('role', 1)->get();

        $data['absensi_jenis'] = $absensi_jenis;
        $data['atasan'] = $user;

        return view('pages.absense.form.create', $data);
    }

    public function store(Request $request)
    {
        $absensi = new AbsenseModel();
        $absensi->fill($request->except('id', 'status'));
        $absensi->status = 'Diajukan';
        if ($absensi->save()) {
            return redirect()->route('absense-form');
        } else {
            return redirect()->route('absense-form');
        }
    }

    public function update_store(Request $request)
    {
        $absensi = AbsenseModel::find($request->id);
        $absensi->fill($request->except('id'));
        if ($absensi->save()) {
            return redirect()->route('absense-atasan');
        } else {
            return redirect()->route('absense-atasan');
        }
    }
}
