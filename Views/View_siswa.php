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

    <!-- Page content-->
    <?php

    include '../Controllers/Controller_siswa.php';
    // Membuat Object dari Class siswa
    $siswa = new Controller_siswa();

    $GetSiswa = $siswa->GetData_All();

    // untuk mengecek di object $siswa ada berapa banyak Property
    //echo var_dump($siswa);
    ?>

    <br>
    <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
    <h2>CRUD and CSRF</h2>
    <h3>Table Siswa</h3>
    <h3><a class="btn btn-success" href="View_post_siswa.php">Add Data</a></h3>


    <table class="table table-bordered" border="1">
        <tr class="table-light">
            <th>No</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>ID Kelas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>ID Spp</th>
            <th>Action</th>
        </tr>
        <?php
        // Decision validation variabel
        if (isset($GetSiswa)) {
            $no = 1;
            foreach ($GetSiswa as $Get) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $Get['nisn']; ?></td>
                    <td><?php echo $Get['nis']; ?></td>
                    <td><?php echo $Get['nama']; ?></td>
                    <td><?php echo $Get['id_kelas']; ?></td>
                    <td><?php echo $Get['alamat']; ?></td>
                    <td><?php echo $Get['no_telp']; ?></td>
                    <td><?php echo $Get['id_spp']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="../Views/View_put_siswa.php?nisn=<?php echo base64_encode($Get['nisn']) ?>">view</a>
                        <a class="btn btn-danger" onclick="konfirmasi(<?php echo $Get['nisn'] ?>)">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

    <script>
        function konfirmasi(nisn) {
            if (window.confirm("Apakah anda ingin menghapus data ini?")) {
                window.location.href = '../Config/Routes.php?function=delete&nisn=<?php echo base64_encode($Get['nisn']) ?>';
            };
        }
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>

</html>