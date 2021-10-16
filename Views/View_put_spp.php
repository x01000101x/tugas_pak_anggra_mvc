<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SPP</title>
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

    include '../Controllers/Controller_spp.php';
    // Membuat Object dari Class spp
    $spp = new Controller_spp();

    $id_spp = base64_decode($_GET['id_spp']);
    $GetSpp = $spp->GetData_Where($id_spp);
    ?>


    <?php
    foreach ($GetSpp as $Get) {
    ?>
        <div class="container">
            <div class="con mt-3 ml-3 position-absolute top-0 start-0">
                <form action="../Config/Routes.php?function=put_spp" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                    <table border="0">

                        <tr>
                            <td>id spp</td>
                            <td><input type="number" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
                        </tr>
                        <tr>
                            <td>tahun</td>
                            <td><input type="number" name="tahun" value="<?php echo $Get['tahun']; ?>"></td>
                        </tr>
                        <tr>
                            <td>nominal</td>
                            <td><input type="number" name="nominal" value="<?php echo $Get['nominal']; ?>"></td>
                        </tr>
                        <td colspan="2" align="right"><input class="bg-warning" type="submit" name="proses" value="Edit"></td>
                        </tr>
                    </table </form>
            </div>
        </div>

    <?php
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>