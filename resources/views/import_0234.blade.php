<!DOCTYPE html>
<html lang="en">

<head>
    <title>Import Dokter</title>
</head>

<body>
    <div class="panel panel-default" style="padding:20px">
    <center>
        <h3 class="font-weight-bold">IMPORT DOKTER</h3>
        <br />
        <br />
        <br />
        <form action="/dokter/import" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" name="file"/>
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </center>



    </div>
</body>

</html>