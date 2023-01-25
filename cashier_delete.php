<?php
    require 'koneksi.php';

    $id9=$_GET["id9"];

    if(hapus3($id9)>0){
        header("location:admin_viewcashier.php");
        exit;
    }
    else{
        echo "<script>
        alert('Data has been unsuccessfully deleted!'); </script>";
    }
?>