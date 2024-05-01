<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenseJenisModel extends Model
{
    use HasFactory;

    protected $table = 'absensi_jenis';
    protected $guarded = ['id'];
}
