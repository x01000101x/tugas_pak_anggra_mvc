<?php

// Class kelas (CRUD kelas)
class Controller_kelas
{

    // Property
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $Mkelas;
    var $id_kelas;
    var $nama_kelas;
    var $kompetensi_keahlian;





    // Method main variabel
    function __construct()
    {
        // Membuat Object dari Class Model kelas
        include '../Models/Model_kelas.php';
        $this->Mkelas = new Model_kelas();
    }




    // Method untuk memasukan data ke dalam table
    function POSTData($id_kelas, $nama_kelas, $kompetensi_keahlian)
    {

        // perintah POST data
        $this->Mkelas->POST($id_kelas, $nama_kelas, $kompetensi_keahlian);
    }




    // Method untuk mengambil semua data dari table
    function GetData_All()
    {

        // perintah GET data
        return $this->Mkelas->GET();
    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where($id_kelas)
    {

        // perintah GET data
        return $this->Mkelas->GET_Where($id_kelas);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData($id_kelas, $nama_kelas, $kompetensi_keahlian)
    {

        // perintah PUT data
        $this->Mkelas->PUT($id_kelas, $nama_kelas, $kompetensi_keahlian);
    }




    // Method untuk menghapus data dari table
    function DELETEData($id_kelas)
    {

        // perintah DELETE data
        $this->Mkelas->DELETE($id_kelas);
    }
}
