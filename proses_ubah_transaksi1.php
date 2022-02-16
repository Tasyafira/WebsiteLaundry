<?php
if($_POST){

    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_transaksi=$_POST['id_transaksi'];


    if(empty($tgl_bayar)){
        echo "<script>alert('Payment Date tidak boleh kosong');location.href='ubah_transaksi1.php';</script>";

    } elseif(empty($status)){
        echo "<script>alert('Status tidak boleh kosong');location.href='ubah_transaksi1.php';</script>";

    } elseif(empty($dibayar)){
        echo "<script>alert('Payment Status kelamin tidak boleh kosong');location.href='ubah_transaction1.php';</script>";

    }else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update transaksi set tgl_bayar='".$tgl_bayar."', status='".$status."',dibayar='".$dibayar."',id_transaksi='".$id_transaksi."' where id_transaksi='".$id_transaksi."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update transaksi');location.href='tampil_transaksi1.php';</script>";
            } else {
                echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi1.php?id_transaksi=".$id_transaksi."';</script>";
            }
        }
        }

?>