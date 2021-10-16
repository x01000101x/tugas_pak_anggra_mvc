<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pembayaran</title>
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

    include '../Controllers/Controller_pembayaran.php';
    // Membuat Object dari Class pembayaran
    $pembayaran = new Controller_pembayaran();
    $GetPembayaran = $pembayaran->GetData_All();

    // untuk mengecek di object $pembayaran ada berapa banyak Property
    //echo var_dump($pembayaran);
    ?>
    <br>

    <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
    <h2>CRUD and CSRF</h2>
    <h3>Table pembayaran</h3>
    <h3><a class="btn btn-success" href="View_post_pembayaran.php">Add Data</a></h3>


    <table class="table table-bordered" border="1">
        <tr class="table-light">
            <th>No</th>
            <th>ID Pembayaran</th>
            <th>ID Petugas</th>
            <th>NISN</th>
            <th>Tanggal Dibayar</th>
            <th>Bulan Dibayar</th>
            <th>Tahun Dibayar</th>
            <th>id spp</th>
            <th>jumlah bayar</th>
            <th>Actions</th>

        </tr>
        <?php
        // Decision validation variabel
        if (isset($GetPembayaran)) {
            $no = 1;
            foreach ($GetPembayaran as $Get) {
        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $Get['id_pembayaran']; ?></td>
                    <td><?php echo $Get['id_petugas']; ?></td>
                    <td><?php echo $Get['nisn']; ?></td>
                    <td><?php echo $Get['tgl_bayar']; ?></td>
                    <td><?php echo $Get['bulan_dibayar']; ?></td>
                    <td><?php echo $Get['tahun_dibayar']; ?></td>
                    <td><?php echo $Get['id_spp']; ?></td>
                    <td><?php echo $Get['jumlah_bayar']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="../Views/View_put_pembayaran.php?id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>">view</a>
                        <a class="btn btn-danger" onclick="konfirmasi(<?php echo ($Get['id_pembayaran']) ?>)">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <script>
        function konfirmasi(id_pembayaran) {
            if (window.confirm("Apakah anda ingin menghapus data ini?")) {
                window.location.href = '../Config/Routes.php?function=delete_pembayaran&id_pembayaran=<?php echo base64_encode($Get['id_pembayaran']) ?>';
            }
        }
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>

</html>