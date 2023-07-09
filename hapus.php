<?php
    include("conf.php");

    //Ambil ID
    $id=$_GET['id'];
    
    //Query SQL
    $query= "DELETE FROM mahasiswa WHERE id= '$id'";

    //Status Jika Gagal
    if($koneksi->query($query)){
        header("location: index.php");
    }else{
        echo "Data Gagal Dihapus";
    }
?>