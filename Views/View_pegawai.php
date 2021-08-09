<?php

include '../Controllers/Controller_pegawai.php';
// Membuat Object dari Class pegawai
$pegawai = new Controller_pegawai();
$GetPegawai = $pegawai->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table Pegawai</h3>
<h3><a href="View_post_pegawai.php">Add Data</a></h3>


<table border="1">
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>ID Kelas</th>
        <th>Alamat</th>
        <th>No Telepon</th>
        <th>ID Spp</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetPegawai)) {
        $no = 1;
        foreach ($GetPegawai as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['nisn']; ?></td>
                <td><?php echo $Get['nis']; ?></td>
                <td><?php echo $Get['nama']; ?></td>
                <td><?php echo $Get['id_kelas']; ?></td>
                <td><?php echo $Get['alamat']; ?></td>
                <td><?php echo $Get['no_telp']; ?></td>
                <td><?php echo $Get['id_spp']; ?></td>
                <td>
                    <a href="../Views/View_put_pegawai.php?nip=<?php echo $Get['nisn'] ?>">view</a>
                    <a href="../Config/Routes.php?function=delete&nip=<?php echo $Get['nisn'] ?>">Delete</a>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>