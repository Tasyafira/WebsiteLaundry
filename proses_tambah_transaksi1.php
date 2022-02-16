<?php
if($_POST){

    $id_member=$_POST['id_member'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_user=$_POST['id_user'];

    if(empty($id_member)){

        echo "<script>alert('Nama member tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($tgl)){

        echo "<script>alert('Tanggal tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($batas_waktu)){

        echo "<script>alert('Batas waktu tidak boleh kosong');location.href='transaksi.php';</script>";

    }  elseif(empty($status)){

        echo "<script>alert('Status tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($dibayar)){

        echo "<script>alert('Status pembayaran tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($id_user)){

        echo "<script>alert('Nama user tidak boleh kosong');location.href='transaksi.php';</script>";

    } else {

        session_start();

        include "koneksi.php";

        $cart=@$_SESSION['cart'];

        // if(array_num_rows($cart)>0){

            mysqli_query($conn,"INSERT INTO `transaksi` ( `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `status`, `dibayar`, `id_user`) VALUES ('".$id_member."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_user."')");

            $id=mysqli_insert_id($conn);

            foreach ($cart as $key_paket => $val_paket) {

                mysqli_query($conn,"INSERT INTO `detail_transaksi` (`id_transaksi`, `id_paket`, `qty`, `subtotal`) VALUES ('".$id."','".$val_paket['id_paket']."','".$val_paket['qty']."','".$val_paket['subtotal']."')");

            }

            unset($_SESSION['cart']);

            echo '<script>alert("Succeed");location.href="tampil_transaksi1.php"</script>';

        // }

    }

}

?>