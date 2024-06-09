<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paramedik extends Model
{
    protected $table = 'paramedik';

    protected $fillable =
    [
        'nama', 'gender', 'tmp_lahir', 'tgl_lahir', 'kategori', 'telpon', 'alamat', 'unit_kerja_id',
    ];
}
