<?php

// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class kelas
$kelas = new Controller_kelas();

$id_kelas = base64_decode($_GET['id_kelas']);
$GetKelas = $kelas->GetData_Where($id_kelas);
?>


<?php
foreach ($GetKelas as $Get) {
?>

    <form action="../Config/Routes.php?function=put_kelas" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
        <table border="1">
            <input type="hidden" name="id_kelas" required value="<?php echo $Get['id_kelas']; ?>">
            <tr>
                <td>id kelas</td>
                <td><input type="number" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>"></td>
            </tr>
            <tr>
                <td>nama kelas</td>
                <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>"></td>
            </tr>
            <tr>
                <td>kompetensi keahlian</td>
                <td><input type="text" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian']; ?>"></td>
            </tr>
            <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
            </tr>
        </table </form>

    <?php
}
    ?>