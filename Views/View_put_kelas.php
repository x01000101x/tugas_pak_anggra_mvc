<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kelas</title>
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

    include '../Controllers/Controller_kelas.php';
    // Membuat Object dari Class kelas
    $kelas = new Controller_kelas();

    $id_kelas = base64_decode($_GET['id_kelas']);
    $GetKelas = $kelas->GetData_Where($id_kelas);
    ?>


    <?php
    foreach ($GetKelas as $Get) {
    ?>
        <div class="container">
            <div class="con mt-3 ml-3 position-absolute top-0 start-0">
                <form action="../Config/Routes.php?function=put_kelas" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                    <table border="0">
                        <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
                        <tr>
                            <td>ID kelas</td>
                            <td><input type="number" name="id_kelas" required value="<?php echo $Get['id_kelas']; ?>"></td>
                        </tr>
                        <tr>
                            <td>nama kelas</td>
                            <td><input type="text" name="nama_kelas" required value="<?php echo $Get['nama_kelas']; ?>"></td>
                        </tr>
                        <tr>
                            <td>kompetensi keahlian</td>
                            <td><input type="text" name="kompetensi_keahlian" required value="<?php echo $Get['kompetensi_keahlian']; ?>"></td>
                        </tr>
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