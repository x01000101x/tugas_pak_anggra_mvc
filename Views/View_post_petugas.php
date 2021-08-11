<?php
// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_petugas" method="POST">
    <input type="text" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
    <table border="1">
        <tr>
            <td>id petugas</td>
            <td><input type="number" name="id_petugas"></td>
        </tr>
        <tr>
            <td>username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>nama petugas</td>
            <td><input type="text" name="nama_petugas">
            </td>
        <tr>
            <td>level</td>

            <td> <label for="level">Pilih level:</label>
                <select id="level" name="level">
                    <option value="Administrator">Administrator</option>
                    <option value="Petugas">Petugas</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
        </tr>
    </table </form>