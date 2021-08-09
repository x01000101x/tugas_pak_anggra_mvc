<?php

// Class pegawai (CRUD pegawai)
class Controller_pegawai
{

    // Property
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $MPegawai;

    var $nisn;
    var $nis;
    var $nama;
    var $id_kelas;
    var $alamat;
    var $no_telp;
    var $id_spp;



    // Method main variabel
    function __construct()
    {
        // Membuat Object dari Class Module pegawai
        include '../Models/Model_pegawai.php';
        $this->MPegawai = new Model_pegawai();
    }




    // Method untuk memasukan data ke dalam table
    function POSTData($nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp)
    {

        // perintah POST data
        $this->MPegawai->POST($nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp);
    }




    // Method untuk mengambil semua data dari table
    function GetData_All()
    {

        // perintah GET data
        return $this->MPegawai->GET();
    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where($nisn)
    {

        // perintah GET data
        return $this->MPegawai->GET_Where($nisn);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData($nisn, $nis, $nama,  $id_kelas, $alamat, $no_telp, $id_spp)
    {

        // perintah PUT data
        $this->MPegawai->PUT($nisn, $nis, $nama, $id_kelas, $alamat, $no_telp, $id_spp);
    }




    // Method untuk menghapus data dari table
    function DELETEData($nisn)
    {

        // perintah DELETE data
        $this->MPegawai->DELETE($nisn);
    }
}
