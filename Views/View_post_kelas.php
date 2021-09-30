<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kelas</title>
</head>

<body>


    <?php
    // Memanggil fungsi dari CSRF
    include('../Config/Csrf.php');
    ?>
    <form action="../Config/Routes.php?function=create_kelas" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
        <div class="mb-3">
            <label for="id_kelas" class="form-label">ID Kelas</label>
            <input type="number" class="form-control" id="id_kelas" name="id_kelas" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="id_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" id="id_kelas" name="id_kelas" aria-describedby="emailHelp" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <td>id kelas</td>
        <td><input type="number" name="id_kelas" required></td>
        </tr>
        <tr>
            <td>nama kelas</td>
            <td><input type="text" name="nama_kelas" required></td>
        </tr>
        <tr>
            <td>kompetensi keahlian</td>
            <td><input type="text" name="kompetensi_keahlian" required></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </form>

</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</html>