<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tambah</title>
</head>

<body>
    <center>
        <h3>TAMBAH DOKTER</h3>
    </center>

    <form action="/dokter/tambah" method="post">
        {{ csrf_field() }}
        <input class="form-control form-control-sm" type="text" name="nama_b" placeholder="Nama Dokter"> <br> <br>
        <input class="form-control form-control-sm" type="text" name="jabatan_b" placeholder="Jabatan"> <br> <br>
        <input class="btn btn-primary btn-sm" type="submit" value="Tambah">
    </form>
</body>

</html>