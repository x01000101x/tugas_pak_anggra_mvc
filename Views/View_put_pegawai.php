<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_Pegawai.php';
// Membuat Object dari Class pegawai
$pegawai = new Controller_Pegawai();
$GetPegawai = $pegawai->GetData_Where($_GET['nip']);
?>



<?php
    foreach($GetPegawai as $Get){
?>

<form action="../Config/Routes.php?function=put" method="POST">
<input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="nip" value="<?php echo $Get['nip']; ?>">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $Get['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name="jns_kel">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['jns_kel']; ?>">
                <?php
                    if($Get['jns_kel']=="L")
                    {
                        echo "Laki-Laki";
                    }
                    else{
                        echo "Perempuan";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->



                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tgl_lahir" value="<?php echo $Get['tgl_lahir']; ?>">
    </tr>
    <tr>
        <td>Status</td>
        <td>
            <select name="status">

                 <!-- Logic combo Get database -->
                 <option value="<?php echo $Get['status']; ?>">
                <?php
                    if($Get['status']=="B")
                    {
                        echo "Belum Menikah";
                    }
                    else{
                        echo "Menikah";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->

                <option value="B">Belum Menikah</option>
                <option value="M">Menikah</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Mulai Kerja</td>
        <td><input type="date" name="mulai_kerja" value="<?php echo $Get['mulai_kerja']; ?>">
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>

<?php
    }
?>