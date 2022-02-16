<?php

if($_POST){


    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $jenis_kelamin=$_POST['jenis_kelamin'];

    $tlp=$_POST['tlp'];


    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_member1.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member1.php';</script>";

    } elseif(empty($jenis_kelamin)){

        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_member1.php';</script>";

    } elseif(empty($tlp)){

        echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_member1.php';</script>";

    } else {

        include "koneksi.php";
            $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$_POST['nama']."','".$_POST['alamat']."','".$_POST['jenis_kelamin']."','".$_POST['tlp']."')") or die(mysqli_error($conn));
            if($insert){
            echo "<script>alert('Sukses Menambahkan Member');location.href='tambah_member1.php';</script>";
            } else {
            echo "<script>alert('Gagal Menambahkan Member');location.href='tambah_member1.php';</script>";
            }
        }
        }
?>