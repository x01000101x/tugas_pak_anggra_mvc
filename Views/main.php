<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MVC Pembayaran SPP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_siswa.php">Siswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_petugas.php">Petugas</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_kelas.php">Kelas</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_spp.php">SPP</a></li>
                    <li class="nav-item"><a class="nav-link" href="View_pembayaran.php">Pembayaran</a></li>
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

        if ($id == 1) {
            include('View_kelas.php');
        } elseif ($id == 2) {
            include('View_post_kelas.php');
        } elseif ($id == 3) {
            include('View_put_kelas.php');
        } else {
            echo "Selamat Datang";
        }
        ?>

        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>TUGAS MVC PAK ANGGRA</h1>
                <p class="lead">OLEH : LEONARD DENIEL DAMANIK (16)<br>
                    KELAS : 12 RPL 2
                </p>
                <p>Silahkan gunakan topbar diatas</p>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>


</body>

</html>