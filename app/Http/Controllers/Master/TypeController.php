<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\AbsenseAlasanModel;
use App\Models\AbsenseJenisModel;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $type = AbsenseJenisModel::all();

        $data['type'] = $type;

        return view('pages.master.type.index', $data);
    }

    public function create()
    {
        return view('pages.master.type.form.create');
    }

    public function store(Request $request)
    {
        $absensi = new AbsenseJenisModel();
        $absensi->fill($request->except('id'));
        if ($absensi->save()) {
            return redirect()->route('type');
        } else {
            return redirect()->route('type-create');
        }
    }

    public function update(Request $request)
    {
        $absensi = AbsenseJenisModel::find($request->id);
        $data['type'] = $absensi;
        return view('pages.master.type.form.update', $data);
    }

    public function update_store(Request $request)
    {
        $absensi = AbsenseJenisModel::find($request->id);
        $absensi->fill($request->except('id'));
        if ($absensi->save()) {
            return redirect()->route('type');
        } else {
            return redirect()->route('type-update');
        }
    }

    public function delete(Request $request)
    {
        $absensi = AbsenseJenisModel::find($request->id);
        AbsenseAlasanModel::where('absensi_jenis_id', $request->id)->delete();
        if ($absensi->delete()) {
            return redirect()->route('type');
        } else {
            return redirect()->route('type');
        }
    }
}
