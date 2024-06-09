<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Paramedik;
use App\Models\Pasien;
use App\Models\Periksa;
use App\Models\Unit_Kerja;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $list_pasien = Pasien::all();

        return view('pasien.show', compact('list_pasien'));
    }

    public function kelurahan()
    {
        $list_kelurahan = Kelurahan::all();

        return view('kelurahan.show', compact('list_kelurahan'));
    }

    public function uk()
    {
        $list_uk = Unit_Kerja::all();

        return view('unit_kerja.show', compact('list_uk'));
    }

    public function paramedik()
    {
        $list_paramedik = Paramedik::all();

        return view('paramedik.show', compact('list_paramedik'));
    }

    public function periksa()
    {
        $list_periksa = Periksa::all();

        return view('periksa.show', compact('list_periksa'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kelurahan_id' => 'required',
        ]);

        pasien::create($validatedData);

        return redirect('/admin');
    }
}
