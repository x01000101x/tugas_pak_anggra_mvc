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
    ?>
    <div class="container">
        <div class="con mt-3 ml-3 position-absolute top-0 start-0">

            <form action="../Config/Routes.php?function=create_kelas" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                <table border="0">

                    <td>ID kelas</td>
                    <td><input type="number" name="id_kelas" required></td>

                    <tr>
                        <td>nama kelas</td>
                        <td><input type="text" name="nama_kelas" required></td>
                    </tr>
                    <tr>
                        <td>kompetensi keahlian</td>
                        <td><input type="text" name="kompetensi_keahlian" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input class="bg-success" type="submit" name="proses" value="Create"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>