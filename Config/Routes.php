<?php

// Memanggil fungsi dari CSRF
include('Csrf.php');


include '../Controllers/Controller_siswa.php';
include '../Controllers/Controller_petugas.php';
include '../Controllers/Controller_spp.php';




// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if ($function == "create") {
    $db = new Controller_siswa();
    // Validasi Token CSRF
    if (validation() == true) {
        $db->POSTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_siswa.php");
}
// Decision variabel put
elseif ($function == "put") {
    $db = new Controller_siswa();
    // Validasi Token CSRF
    if (validation() == true) {
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../Views/View_siswa.php");
}
// Decision variabel delete
elseif ($function == "delete") {
    $db = new Controller_siswa();
    $db->DELETEData($_GET['nisn']);
    header("location:../Views/View_siswa.php");
}

//PETUGAS
// Decision variabel create p
if ($function == "create_petugas") {
    $db_petugas = new Controller_petugas();
    // Validasi Token CSRF
    if (validation() == true) {
        $db_petugas->POSTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../Views/View_petugas.php");
}
// Decision variabel put
elseif ($function == "put_petugas") {
    $db_petugas = new Controller_petugas();
    // Validasi Token CSRF
    if (validation() == true) {
        $db_petugas->PUTData(
            $_POST['id_petugas'],
            $_POST['username'],
            $_POST['password'],
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../Views/View_petugas.php");
}
// Decision variabel delete
elseif ($function == "delete_petugas") {
    $db_petugas = new Controller_petugas();
    $db_petugas->DELETEData($_GET['id_petugas']);
    header("location:../Views/View_petugas.php");
}

//SPP
// Decision variabel create p
if ($function == "create_spp") {
    $db_spp = new Controller_spp();
    // Validasi Token CSRF
    if (validation() == true) {
        $db_spp->POSTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../Views/View_spp.php");
}
// Decision variabel put
elseif ($function == "put_spp") {
    $db_spp = new Controller_spp();
    // Validasi Token CSRF
    if (validation() == true) {
        $db_spp->PUTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../Views/View_spp.php");
}
// Decision variabel delete
elseif ($function == "delete_spp") {
    $db_spp = new Controller_spp();
    $db_spp->DELETEData($_GET['id_spp']);
    header("location:../Views/View_spp.php");
}
