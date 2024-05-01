<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('role', $request->role)->orderBy('name', 'asc')->get();

        $data['role'] = $request->role;
        $data['user'] = $user;

        return view('pages.user.index', $data);
    }

    public function create(Request $request)
    {
        $data['role'] = $request->role;
        return view('pages.user.form.create', $data);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->except('id'));
        if ($user->save()) {
            return redirect()->route('user', ['role' => $request->role]);
        } else {
            return redirect()->route('user', ['role' => $request->role]);
        }
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $data['user'] = $user;
        $data['role'] = $user->role;

        return view('pages.user.form.update', $data);
    }

    public function update_store(Request $request)
    {
        $user = User::find($request->id);
        $user->fill($request->except('id'));
        if ($user->save()) {
            return redirect()->route('user', ['role' => $user->role]);
        } else {
            return redirect()->route('user', ['role' => $user->role]);
        }
    }

    public function delete(Request $request)
    {
        $role_old = 0;
        $user = User::find($request->id);
        $role_old = $user->role;
        if ($user->delete()) {
            return redirect()->route('user', ['role' => $role_old]);
        } else {
            return redirect()->route('user', ['role' => $role_old]);
        }
    }
}
