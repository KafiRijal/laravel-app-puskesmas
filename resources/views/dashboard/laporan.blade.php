<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Laporan</title>
</head>

<body>
    <h1>{{$title}}</h1>
    <h6>Tahun {{$tahun}}</h6>

    <h6>Data Mahasiswa</h6>
    <table border="1" >
        <tbody>
            @foreach ($data_mhs as $mhs)
            <tr>
                <td>{{$mhs['prodi']}}</td>
                <td>{{$mhs['jumlah']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>