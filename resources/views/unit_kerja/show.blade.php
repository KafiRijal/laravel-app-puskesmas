@extends('layouts.admin_layout')

@section('title')
    Data Unit Kerja
@endsection

@section('card_title')
    Daftar Unit Kerja Aktif
@endsection

@section('content')
    <table class="table table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Unit Kerja</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_uk as $uk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $uk->nama }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
