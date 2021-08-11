<?php

// Class petugas (CRUD petugas)
class Controller_petugas
{

    // Property
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    var $Mpetugas;

    var $id_petugas;
    var $username;
    var $password;
    var $nama_petugas;
    var $level;




    // Method main variabel
    function __construct()
    {
        // Membuat Object dari Class Module petugas
        include '../Models/Model_petugas.php';
        $this->Mpetugas = new Model_petugas();
    }




    // Method untuk memasukan data ke dalam table
    function POSTData($id_petugas, $username, $password, $nama_petugas, $level)
    {

        // perintah POST data
        $this->Mpetugas->POST($id_petugas, $username, $password, $nama_petugas, $level);
    }




    // Method untuk mengambil semua data dari table
    function GetData_All()
    {

        // perintah GET data
        return $this->Mpetugas->GET();
    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where($id_petugas)
    {

        // perintah GET data
        return $this->Mpetugas->GET_Where($id_petugas);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData($id_petugas, $username, $password, $nama_petugas, $level)
    {

        // perintah PUT data
        $this->Mpetugas->PUT($id_petugas, $username, $password, $nama_petugas, $level);
    }




    // Method untuk menghapus data dari table
    function DELETEData($id_petugas)
    {

        // perintah DELETE data
        $this->Mpetugas->DELETE($id_petugas);
    }
}
