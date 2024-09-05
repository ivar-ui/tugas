

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pengisian</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
        <form action="" method="post">
            <h2>Formulir Pengisian</h2>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="nama" required>

            <label for="nim">Nim:</label>
            <input type="text" name="nim" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="address">Alamat:</label>
            <textarea name="alamat" rows="4" cols="50" required></textarea>

            <label for="message">Pesan:</label>
            <textarea name="pesan" rows="4" cols="50" required></textarea>

            <input type="submit" name="aksi" value="kirim">
        </form>
    </body>
</html>

<?php
    include "koneksi.php";

    if (isset($_POST['aksi'])) {
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);

        $sql = "INSERT INTO senin (nama, nim, email, alamat, pesan) VALUES ('$nama', '$nim', '$email', '$alamat', '$pesan')";
        $result = mysqli_query($koneksi, $sql);
    }
    ?>