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

    include '../Controllers/Controller_pembayaran.php';
    // Membuat Object dari Class pembayaran
    $pembayaran = new Controller_pembayaran();

    $id_pembayaran = base64_decode($_GET['id_pembayaran']);
    $GetPembayaran = $pembayaran->GetData_Where($id_pembayaran);
    ?>


    <?php
    foreach ($GetPembayaran as $Get) {
    ?>
        <div class="container">
            <div class="con mt-3 ml-3 position-absolute top-0 start-0">
                <form action="../Config/Routes.php?function=put_pembayaran" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                    <table border="0">
                        <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">

                        <tr>
                            <td>id pembayaran</td>
                            <td><input type="number" required name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>"></td>
                        </tr>
                        <tr>
                            <td>id petugas</td>
                            <td><input type="number" required name="id_petugas" value="<?php echo $Get['id_petugas']; ?>"></td>
                        </tr>
                        <tr>
                            <td>nisn</td>
                            <td><input type="number" required name="nisn" value="<?php echo $Get['nisn']; ?>"></td>
                        </tr>
                        <tr>
                            <td>tgl bayar</td>
                            <td><input type="number" required name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>"></td>
                        </tr>
                        <tr>
                            <td>bulan dibayar</td>

                            <td> <label for="bulan_dibayar">Pilih bulan:</label>
                                <select id="bulan_dibayar" required name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar']; ?>">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>tahun dibayar</td>
                            <td><input type="number" required name="tahun_dibayar" value="<?php echo $Get['tahun_dibayar']; ?>"></td>
                        </tr>
                        <tr>
                            <td>id spp</td>
                            <td><input type="number" required name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
                        </tr>
                        <tr>
                            <td>jumlah bayar</td>
                            <td><input type="number" required name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar']; ?>"></td>
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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>