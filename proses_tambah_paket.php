<?php

if($_POST){
    
    if(empty($_POST['jenis'])){
        echo "<script>alert('jenis paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($_POST['deskripsi'])){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($_POST['harga'])){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";

         // upload image
         $target_dir = "foto_paket/";
         $target_file = $target_dir . basename($_FILES["foto_paket"]["name"]);
         $uploadOk = 1;
         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
         // Allow certain file formats
         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
         echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
         $uploadOk = 0;
         }
 
         // Check if $uploadOk is set to 0 by an error
         if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.";
         // if everything is ok, try to upload file
         } else {
         if (move_uploaded_file($_FILES["foto_paket"]["tmp_name"], $target_file)) {
             echo "The file " .htmlspecialchars( basename( $_FILES["foto_paket"]["name"])). " has been uploaded.";
             
             $insert=mysqli_query($conn,"insert into paket (jenis, deskripsi, harga, foto_paket) value ('".$_POST['jenis']."','".$_POST['deskripsi']."','".$_POST['harga']."','".basename($_FILES["foto_paket"]["name"])."')");
             if($insert == !false){
             echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
             } else {
             echo "<script>alert('Gagal menambahkan paket');location.href='tampil_paket.php';</script>";
             }
         } else {
             echo "Sorry, there was an error uploading your file.";
         }
         }
     }
 
 } else {
     echo "404 not found";
 }
 
 ?>