<!DOCTYPE html>

<html>

<head>

    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <title></title>

</head>

<body>
    <div class= "container">

    <h3>Tambah Member</h3>

    <form action="proses_tambah_member.php" method="post" enctype="multipart/form-data">

        Nama :
        <input type="text" name="nama" value="" class="form-control">

        Alamat :
        <textarea name="alamat" cols="30" rows="10" class="form-control"></textarea>

        Jenis Kelamin :
        <select name="jenis_kelamin" class="form-control">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        Telepon :
        <input type="text" name="tlp" value="" class="form-control"><br>

        <br></br>

        <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
        <a href = "tampil_member.php" class = "btn btn-warning">Data Member</a>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>