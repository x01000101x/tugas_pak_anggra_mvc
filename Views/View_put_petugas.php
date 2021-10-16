<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
    <link rel="stylesheet" href="style.css">
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

    include '../Controllers/Controller_petugas.php';
    // Membuat Object dari Class petugas
    $petugas = new Controller_petugas();

    $id_petugas = base64_decode($_GET['id_petugas']);
    $GetPetugas = $petugas->GetData_Where($id_petugas);
    ?>


    <?php
    foreach ($GetPetugas as $Get) {
    ?>
        <div class="container">
            <div class="con mt-3 ml-3 position-absolute top-0 start-0">

                <form action="../Config/Routes.php?function=put_petugas" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                    <table border="0">
                        <input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">

                        <tr>
                            <td>id petugas</td>
                            <td><input type="number" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>"></td>
                        </tr>
                        <tr>
                            <td>username</td>
                            <td><input type="password" name="password" value="<?php echo $Get['password']; ?>"></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="text" name="username" value="<?php echo $Get['username']; ?>"></td>
                        </tr>
                        <tr>
                            <td>nama petugas</td>
                            <td><input type="text" name="nama_petugas" value="<?php echo $Get['nama_petugas']; ?>"></td>
                        </tr>
                        <tr>
                            <td>level</td>

                            <td> <label for="level">Pilih level:</label>
                                <select id="level" name="level">
                                    <option value="Administrator">Administrator</option>
                                    <option value="Petugas">Petugas</option>
                                </select>
                            </td>
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

    !-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>