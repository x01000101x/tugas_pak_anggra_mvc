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
    <div class="container">
        <div class="con mt-3 ml-3 position-absolute top-0 start-0">

            <?php
            // Memanggil fungsi dari CSRF
            include('../Config/Csrf.php');
            ?>
            <form action="../Config/Routes.php?function=create_pembayaran" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
                <table border="0">
                    <tr>
                        <td>id pembayaran</td>
                        <td><input type="number" name="id_pembayaran" required></td>
                    </tr>
                    <tr>
                        <td>id petugas</td>
                        <td><input type="number" name="id_petugas" required></td>
                    </tr>
                    <tr>
                        <td>nisn</td>
                        <td><input type="number" name="nisn" required></td>
                    </tr>
                    <tr>
                        <td>tgl bayar</td>
                        <td><input type="number" name="tgl_bayar" required></td>
                    </tr>
                    <tr>
                        <td>bulan dibayar</td>

                        <td> <label for="bulan_dibayar">Pilih bulan:</label>
                            <select id="bulan_dibayar" name="bulan_dibayar" required>
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
                        <td><input type="number" name="tahun_dibayar" required></td>
                    </tr>
                    <tr>
                        <td>id spp</td>
                        <td><input type=" number" name="id_spp" required></td>
                    </tr>
                    <tr>
                        <td>jumlah bayar</td>
                        <td><input type="number" name="jumlah_bayar" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input class="bg-success" type="submit" name="proses" value="Create"></td>
                    </tr>
                </table </form>
        </div>
    </div>


</body>

</html>