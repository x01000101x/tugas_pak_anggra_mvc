<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_spp" method="POST">
    <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
        <tr>
            <td>id spp</td>
            <td><input type="number" name="id_spp"></td>
        </tr>
        <tr>
            <td>tahun</td>
            <td><input type="number" name="tahun"></td>
        </tr>
        <tr>
            <td>nominal (Rp.)</td>
            <td><input type="number" name="nominal"></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </table </form>