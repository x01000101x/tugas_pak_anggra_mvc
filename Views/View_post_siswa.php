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
        background-color: white;
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
</style>

<body>
    <?php
    // Memanggil fungsi dari CSRF
    include('../Config/Csrf.php');
    ?>
    <div class="con mt-3 ml-3">

        <form action="../Config/Routes.php?function=create" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <table border="1">
            <tr>
                <td>NISN</td>
                <td><input type="number" name="nisn" required></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>ID kelas</td>
                <td><input type="number" name="id_kelas" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
            <td><input type="text" name="alamat" required>
        </td>
        <tr>
            <td>No Telepon</td>
            <td>62<input type="number" name="no_telp" required>
        </td>
    </tr>
    <tr>
        <td>ID_SPP</td>
        <td><input type="number" name="id_spp" required>
    </td>
</tr>
<tr>
    <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
</tr>
</table> -->
        </form>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>

</html>