<?php
    require 'koneksi.php';

    $id1=$_GET["id1"];
    $id2=$_GET["id2"];
    $id3=$_GET["id3"];
    $id4=$_GET["id4"];
    $id5=$_GET["id5"];
    $id6=$_GET["id6"];
    $id7=$_GET["id7"];
    $id8=$_GET["id8"];
    $id10=$_GET["id10"];
    $id11=$_GET["id11"];

    if(hapus3($id9)>0){
        header("location:admin_viewcashier.php");
        exit;
    }
    else if(hapus4($id11)>0){
        header("location:cashier_index.php #contact");
        exit;
    }
    else if(hapus2($id10)>0){
        header("location:cashier_index.php #category");
        exit;
    }
    else if(hapus($id1)>0){
        header("location:admin_kategori1.php");
        exit;
    }
    else if(hapus($id2)>0){
        header("location:admin_kategori2.php");
        exit;
    }
    else if(hapus($id3)>0){
        header("location:admin_kategori3.php");
        exit;
    }
    else if(hapus($id4)>0){
        header("location:admin_kategori4.php");
        exit;
    }
    else if(hapus($id5)>0){
        header("location:admin_kategori5.php");
        exit;
    }
    else if(hapus($id6)>0){
        header("location:admin_kategori6.php");
        exit;
    }
    else if(hapus($id7)>0){
        header("location:admin_kategori7.php");
        exit;
    }
    else if(hapus($id8)>0){
        header("location:admin_kategori8.php");
        exit;
    }
    else{
        echo "<script>
        alert('Data has been unsuccessfully deleted!'); </script>";
    }
?>