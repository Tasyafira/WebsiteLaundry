<?php 
    if($_GET['id_member']){
        include "koneksi.php";
        $qry_hapus_member=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");
        if($qry_hapus_member){
            echo "<script>alert('Sukses hapus member');location.href='tampil_member1.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus member');location.href='tampil_member1.php';</script>";
        }
    }
?>
