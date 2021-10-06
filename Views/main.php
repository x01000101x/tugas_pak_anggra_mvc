<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<style>
    body {
        background-color: black;
        background-image: url('https://c.tenor.com/LGF6QF4tG3YAAAAM/black-eye.gif');
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
        color: white;
    }
</style>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MVC Pembayaran SPP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_s') ?>">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pet') ?>">Petugas</a></li>
                    <li class="nav-item"><a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_k') ?>">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_sp') ?>">SPP</a></li>
                    <li class="nav-item"><a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pem') ?>">Pembayaran</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?php
        if (isset($_GET['menu'])) {
            $id = base64_decode($_GET['menu']);
        } else {
            $id = "";
        }

        if ($id == 'id_k') {
            include('View_kelas.php');
        } elseif ($id == 'id_po_k') {
            include('View_post_kelas.php');
        } elseif ($id == 'id_pu_k') {
            include('View_put_kelas.php');
        } elseif ($id == 'id_s') {
            include('View_siswa.php');
        } elseif ($id == 'id_po_s') {
            include('View_post_siswa.php');
        } elseif ($id == 'id_pu_s') {
            include('View_put_siswa.php');
        } elseif ($id == 'id_sp') {
            include('View_spp.php');
        } elseif ($id == 'id_po_sp') {
            include('View_post_spp.php');
        } elseif ($id == 'id_pu_sp') {
            include('View_put_spp.php');
        } elseif ($id == 'id_pet') {
            include('View_petugas.php');
        } elseif ($id == 'id_po_pet') {
            include('View_post_petugas.php');
        } elseif ($id == 'id_pu_pet') {
            include('View_put_petugas.php');
        } elseif ($id == 'id_pem') {
            include('View_pembayaran.php');
        } elseif ($id == 'id_po_pem') {
            include('View_post_pembayaran.php');
        } elseif ($id == 'id_pu_pem') {
            include('View_put_pembayaran.php');
        } else {
            include('Home.php');
        }
        ?>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="scripts.js"></script>


</body>

</html>