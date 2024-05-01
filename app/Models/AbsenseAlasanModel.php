<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenseAlasanModel extends Model
{
    use HasFactory;

    protected $table = 'absensi_alasan';
    protected $guarded = ['id'];

    public function absense_jenis_model()
    {
        return $this->hasOne(AbsenseJenisModel::class, 'id', 'absensi_jenis_id');
    }
}
