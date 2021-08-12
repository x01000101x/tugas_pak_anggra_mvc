<?php

// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class pembayaran
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_Where($_GET['id_pembayaran']);
?>


<?php
foreach ($GetPembayaran as $Get) {
?>

    <form action="../Config/Routes.php?function=put_pembayaran" method="POST">
        <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
        <table border="1">
            <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">

            <tr>
                <td>id pembayaran</td>
                <td><input type="number" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>"></td>
            </tr>
            <tr>
                <td>id petugas</td>
                <td><input type="number" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>"></td>
            </tr>
            <tr>
                <td>nisn</td>
                <td><input type="number" name="nisn" value="<?php echo $Get['nisn']; ?>"></td>
            </tr>
            <tr>
                <td>tgl bayar</td>
                <td><input type="number" name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>"></td>
            </tr>
            <tr>
                <td>bulan dibayar</td>

                <td> <label for="bulan_dibayar">Pilih bulan:</label>
                    <select id="bulan_dibayar" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar']; ?>">
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
                <td><input type="number" name="tahun_dibayar" value="<?php echo $Get['tahun_dibayar']; ?>"></td>
            </tr>
            <tr>
                <td>id spp</td>
                <td><input type="number" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
            </tr>
            <tr>
                <td>jumlah bayar</td>
                <td><input type="number" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
            </tr>
        </table </form>

    <?php
}
    ?>