<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <center>
        <h3>EDIT DOKTER</h3>
    </center>

    @foreach($dokter as $d)
    <form action="/dokter/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" placeholder="ID" value="{{ $d->id_dokter }}">
        <input class="form-control form-control-sm" type="text" name="nama_b" placeholder="Nama Dokter" value="{{ $d->nama_dokter }}"> <br> <br>
        <input class="form-control form-control-sm" type="text" name="jabatan_b" placeholder="Jabatan" value="{{ $d->jabatan }}"> <br> <br>
        <input class="btn btn-primary btn-sm" type="submit" value="Edit">
    </form>
    @endforeach
</body>

</html>