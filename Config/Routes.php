<?php

// Memanggil fungsi dari CSRF
include('Csrf.php');


include '../Controllers/Controller_Pegawai.php';
// Membuat Object dari Class pegawai
$db = new Controller_pegawai();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if ($function == "create") {

    // Validasi Token CSRF
    if (validation() == true) {
        $db->POSTData(
            $_POST['nis'],
            $_POST['nama'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_pegawai.php");
}
// Decision variabel put
elseif ($function == "put") {

    // Validasi Token CSRF
    if (validation() == true) {
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_pegawai.php");
}
// Decision variabel delete
elseif ($function == "delete") {
    $db->DELETEData($_GET['nisn']);
    header("location:../Views/View_pegawai.php");
}
