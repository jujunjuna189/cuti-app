<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenseModel extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function atasan()
    {
        return $this->hasOne(User::class, 'id', 'atasan_id');
    }
}
