<?php 
    session_start();
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $tgl=date('Y-m-d');
        
        //untuk membuat id dalam detail transaksi
        $id=mysqli_insert_id($conn);
        foreach ($cart as $key_paket => $val_paket) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi ,id_paket, qty, subtotal) value('".$id_transaksi."','".$val_paket['id_paket']."','".$val_paket['qty']."','".$val_paket['subtotal']."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil memilih paket");location.href="detail_transaksi.php"</script>';
    }
?>