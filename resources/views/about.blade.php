@php
$nama = 'Kafi Rijal';
$nim = '0110223151';
$prodi = 'TI';
$tahun = 2023;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>
<body>
    <h1>Data Diri</h1>
    <h3>Nama: {{$nama}}</h3>
    <h3>Nim: {{$nim}}</h3>
    <h3>Program Studi: {{$prodi}}</h3>
    <h3>Tahun Angkatan: {{$tahun}}</h3>
</body>
</html>