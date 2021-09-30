<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
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
    </table>
</form>