
<?php
    include 'koneksi.php';
    $id_paket = $_GET['id_paket'];
    //jumlah 4
    $sql = "delete from paket where id_paket= " . $id_paket. ";";
    //menghapus berapapun kondisi sesuai yg ada pada 
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "<script>alert('Sukses hapus paket'); location.href='tampil_paket.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus paket'); location.href='tampil_paket.php';</script>";
    }
?>