@extends('layouts.admin_layout')

@section('title')
    Data Paramedik
@endsection

@section('card_title')
    Daftar Paramedik Aktif
@endsection

@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Paramedik</th>
                <th>Jenis Kelamin</th>
                <th>Kategori</th>
                <th>No Telpon</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_paramedik as $paramedik)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $paramedik->nama }}</td>
                    <td>{{ $paramedik->gender }}</td>
                    <td>{{ $paramedik->kategori }}</td>
                    <td>{{ $paramedik->telpon }}</td>
                    <td>{{ $paramedik->alamat }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
