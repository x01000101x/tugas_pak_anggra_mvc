<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_kelas" method="POST">
    <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
        <tr>
            <td>id kelas</td>
            <td><input type="number" name="id_kelas"></td>
        </tr>
        <tr>
            <td>nama kelas</td>
            <td><input type="text" name="nama_kelas"></td>
        </tr>
        <tr>
            <td>kompetensi keahlian</td>
            <td><input type="text" name="kompetensi_keahlian"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </table </form>