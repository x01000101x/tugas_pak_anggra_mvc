<?php

include '../Controllers/Controller_spp.php';
// Membuat Object dari Class spp
$spp = new Controller_spp();
$GetSpp = $spp->GetData_All();

// untuk mengecek di object $spp ada berapa banyak Property
//echo var_dump($spp);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3>Table spp</h3>
<h3><a href="View_post_spp.php">Add Data</a></h3>


<table border="1">
    <tr>
        <th>No</th>
        <th>ID spp</th>
        <th>Tahun</th>
        <th>Nominal</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetSpp)) {
        $no = 1;
        foreach ($GetSpp as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['id_spp']; ?></td>
                <td><?php echo $Get['tahun']; ?></td>
                <td><?php echo "Rp. " . $Get['nominal']; ?></td>
                <td>
                    <a href="../Views/View_put_spp.php?id_spp=<?php echo $Get['id_spp'] ?>">view</a>
                    <a href="../Config/Routes.php?function=delete_spp&id_spp=<?php echo $Get['id_spp'] ?>">Delete</a>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>
<a href="../index.php">Kembali</a>