<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_pembayaran" method="POST">
    <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
        <tr>
            <td>id pembayaran</td>
            <td><input type="number" name="id_pembayaran"></td>
        </tr>
        <tr>
            <td>id petugas</td>
            <td><input type="number" name="id_petugas"></td>
        </tr>
        <tr>
            <td>nisn</td>
            <td><input type="number" name="nisn"></td>
        </tr>
        <tr>
            <td>tgl bayar</td>
            <td><input type="number" name="tgl_bayar"></td>
        </tr>
        <tr>
            <td>bulan dibayar</td>

            <td> <label for="bulan_dibayar">Pilih bulan:</label>
                <select id="bulan_dibayar" name="bulan_dibayar">
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
            <td><input type="number" name="tahun_dibayar"></td>
        </tr>
        <tr>
            <td>id spp</td>
            <td><input type=" number" name="id_spp"></td>
        </tr>
        <tr>
            <td>jumlah bayar</td>
            <td><input type="number" name="jumlah_bayar"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </table </form>