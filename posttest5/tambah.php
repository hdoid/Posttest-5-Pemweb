<?php
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $nama = $_POST["Nama"];
    $lomba = $_POST["Lomba"];

    $result = mysqli_query($conn, "insert into lomba     
        (id, nama, lomba) values ('', '$nama', '$lomba')");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="posttest2style.css">
</head>

<body>
    <section class="add-data">
            <div class="add-form-container">
                <h1>Tambah Data</h1><hr><br>
                <form action="" method="post" enctype = "multipart/form-data">
                <label for="">Nama : </label>
                <input type="text" name="Nama" id=""> <br>
                <label for="">Lomba</label>
                <input type="text" name="Lomba" id=""> <br>
                <button type="submit" name="tambah">Tambah</button>
                </form>
            </div>
    </section>
    <a href="index.php">Kembali ke Beranda</a>
</body>

</html>