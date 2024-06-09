<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('dashboard/index');
    }

    public function laporan()
    {
        $title = 'Laporan Program Studi';
        $tahun = 2024;
        $data_mhs = [
            ["prodi" => "SI", "jumlah" => 1020],
            ["prodi" => "TI", "jumlah" => 1215],
            ["prodi" => "BD", "jumlah" => 62]

        ];

        return view('dashboard.laporan', ["title" => $title, "tahun" => $tahun, "data_mhs" => $data_mhs]);
    }
}
