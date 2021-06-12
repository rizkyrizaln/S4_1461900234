<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Dokter</title>
</head>

<body>
    <div class="panel panel-default" style="padding:20px">
    <center>
        <h3 class="font-weight-bold">LIST DOKTER</h3>
    </center>

    <a class="btn btn-primary btn-sm" href="/dokter/importview">Import</a>

    <table border="1" class="table">
        <tr>
            <th>No.</th>
            <th>Nama Dokter</th>
            <th>Jabatan</th>
            <th>Pasien</th>
            <th>Alamat Pasien</th>
            <th>Aksi</th>


        </tr>
        @php
        $i = 1;
        @endphp

        @foreach($dokter as $d)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $d->nama_dokter }}</td>
            <td>{{ $d->jabatan }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->alamat }}</td>


            <td>
                <a class="btn btn-primary btn-sm" href="/dokter/edit/{{ $d->id_dokter }}">Edit</a>
                |
                <a class="btn btn-secondary btn-sm" href="/dokter/del/{{ $d->id_dokter }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <center>
    <a class="btn btn-primary btn-lg" href="/dokter/add">+ Tambah</a>
    </center>
    </div>
</body>

</html>