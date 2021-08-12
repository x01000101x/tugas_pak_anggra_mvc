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
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MVC Pembayaran SPP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_siswa.php">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_petugas.php">Petugas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="View_kelas.php">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_spp.php">SPP</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_pembayaran.php">Pembayaran</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->

    <?php

    include '../Controllers/Controller_kelas.php';
    // Membuat Object dari Class kelas
    $kelas = new Controller_kelas();
    $GetKelas = $kelas->GetData_All();

    // untuk mengecek di object $kelas ada berapa banyak Property
    //echo var_dump($kelas);
    ?>

    <br>
    <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
    <h2>CRUD and CSRF</h2>
    <h3>Table kelas</h3>
    <h3><a href="View_post_kelas.php">Add Data</a></h3>


    <table border="1">
        <tr>
            <th>No</th>
            <th>ID Kelas</th>
            <th>Nama Kelas</th>
            <th>Kompetensi Keahlian</th>
        </tr>
        <?php
        // Decision validation variabel
        if (isset($GetKelas)) {
            $no = 1;
            foreach ($GetKelas as $Get) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $Get['id_kelas']; ?></td>
                    <td><?php echo $Get['nama_kelas']; ?></td>
                    <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                    <td>
                        <a href="../Views/View_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">view</a>
                        <a href="../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>

</html>