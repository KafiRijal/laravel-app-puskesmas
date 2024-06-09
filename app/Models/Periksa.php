<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $table = 'periksa';

    protected $fillable =
    [
        'tanggal', 'berat', 'tinggi', 'tensi', 'keterangan', 'pasien_id', 'dokter_id',
    ];
}
