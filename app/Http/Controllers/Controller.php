<?php

namespace App\Http\Controllers;

use App\Models\User;

abstract class Controller
{
    public function cariAtasan($id)
    {
        $atasan = User::find($id);
        return $atasan;
    }

    public function status_format($status)
    {
        $data = [];
        switch ($status) {
            case 'Diajukan':
                $data['bg-color'] = 'bg-primary';
                $data['text-color'] = 'text-primary';
                break;
            case 'Disetujui':
                $data['bg-color'] = 'bg-success';
                $data['text-color'] = 'text-success';
                break;
            case 'Ditolak':
                $data['bg-color'] = 'bg-danger';
                $data['text-color'] = 'text-danger';
                break;
            default:
                $data['bg-color'] = 'bg-primary';
                $data['text-color'] = 'text-primary';
                break;
        }

        return $data;
    }
}
