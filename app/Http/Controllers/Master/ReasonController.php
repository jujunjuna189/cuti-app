<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\AbsenseAlasanModel;
use App\Models\AbsenseJenisModel;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    public function index()
    {
        $reason = AbsenseAlasanModel::all();

        $data['reason'] = $reason;

        return view('pages.master.reason.index', $data);
    }

    public function getByType(Request $request)
    {
        $reason = AbsenseAlasanModel::where('absensi_jenis_id', $request->absensi_jenis_id)->get();
        echo json_encode($reason);
    }

    public function create()
    {
        $data['type'] = AbsenseJenisModel::all();

        return view('pages.master.reason.form.create', $data);
    }

    public function store(Request $request)
    {
        $absensi = new AbsenseAlasanModel();
        $absensi->fill($request->except('id'));
        if ($absensi->save()) {
            return redirect()->route('reason');
        } else {
            return redirect()->route('reason-create');
        }
    }

    public function update(Request $request)
    {
        $absensi = AbsenseAlasanModel::find($request->id);

        $data['reason'] = $absensi;
        $data['type'] = AbsenseJenisModel::all();
        return view('pages.master.reason.form.update', $data);
    }

    public function update_store(Request $request)
    {
        $absensi = AbsenseAlasanModel::find($request->id);
        $absensi->fill($request->except('id'));
        if ($absensi->save()) {
            return redirect()->route('reason');
        } else {
            return redirect()->route('reason-update');
        }
    }

    public function delete(Request $request)
    {
        $absensi = AbsenseAlasanModel::find($request->id);
        if ($absensi->delete()) {
            return redirect()->route('reason');
        } else {
            return redirect()->route('reason');
        }
    }
}
