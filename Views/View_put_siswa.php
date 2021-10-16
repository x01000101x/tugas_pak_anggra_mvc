<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Siswa</title>
</head>

<style>
    body {
        background-color: black;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    td,
    a {
        color: black;
    }

    .con {
        background-color: white;
        padding: 20px;
        justify-content: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>

    <?php

    // Memanggil fungsi dari CSRF
    include('../Config/Csrf.php');

    include '../Controllers/Controller_siswa.php';
    // Membuat Object dari Class siswa
    $siswa = new Controller_siswa();

    $nisn = base64_decode($_GET['nisn']);
    $GetSiswa = $siswa->GetData_Where($nisn);
    ?>


    <?php
    foreach ($GetSiswa as $Get) {
    ?>
        <div class="container">
            <div class="con mt-3 ml-3 position-absolute top-0 start-0">
                <form action="../Config/Routes.php?function=put" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                    <table border="0">
                        <input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">

                        <tr>
                            <td>NISN</td>
                            <td><input type="number" name="nisn" value="<?php echo $Get['nisn']; ?>"></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td><input type="number" name="nis" value="<?php echo $Get['nis']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" value="<?php echo $Get['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <td>ID kelas</td>
                            <td><input type="number" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" value="<?php echo $Get['alamat']; ?>"></td>
                        </tr>
                        <tr>
                            <td>No telepon (62)</td>
                            <td><input type="number" name="no_telp" value="<?php echo $Get['no_telp']; ?>"></td>
                        </tr>
                        <tr>
                            <td>ID spp</td>
                            <td><input type="number" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right"><input class="bg-warning" type="submit" name="proses" value="Edit"></td>
                        </tr>
                    </table </form>
            </div>
        </div>

    <?php
    }
    ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>

</html>