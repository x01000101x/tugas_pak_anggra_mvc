<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Petugas</title>
</head>
<style>
    body {
        background-color: black;
        background-image: unset;
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
        color: white;
    }
</style>

<body>
    <!-- Responsive navbar-->
    <!-- Page content-->

    <?php

    include '../Controllers/Controller_petugas.php';
    // Membuat Object dari Class petugas
    $petugas = new Controller_petugas();
    $GetPetugas = $petugas->GetData_All();

    // untuk mengecek di object $petugas ada berapa banyak Property
    //echo var_dump($petugas);
    ?>

    <br>
    <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
    <h2>CRUD and CSRF</h2>
    <h3>Table Petugas</h3>
    <h3><a class="btn btn-success" href="View_post_petugas.php">Add Data</a></h3>


    <table class="table table-bordered" border="1">
        <tr class="table-light">
            <th>No</th>
            <th>ID Petugas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Petugas</th>
            <th>Level</th>
            <th>Action</th>

        </tr>
        <?php
        // Decision validation variabel
        if (isset($GetPetugas)) {
            $no = 1;
            foreach ($GetPetugas as $Get) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $Get['id_petugas']; ?></td>
                    <td><?php echo $Get['username']; ?></td>
                    <td><?php echo password_hash($Get['password'], PASSWORD_DEFAULT); ?></td>
                    <td><?php echo $Get['nama_petugas']; ?></td>
                    <td><?php echo $Get['level']; ?></td>

                    <td>
                        <a class="btn btn-warning" href="../Views/View_put_petugas.php?id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>">view</a>
                        <a class="btn btn-danger" href="../Config/Routes.php?function=delete_petugas&id_petugas=<?php echo base64_encode($Get['id_petugas']) ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <script>
        function konfirmasi(id_petugas) {
            if (window.confirm("Apakah anda ingin menghapus data ini?")) {
                window.location.href = '../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo base64_encode($Get['id_petugas']) ?>';
            }
        }
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>

</html>