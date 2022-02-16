<?php
    if($_POST){

        $id_paket=$_POST['id_paket'];
        $jenis=$_POST['jenis'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];
        //$foto_paket=$_POST['foto_paket'];

        if(empty($jenis)){
            echo "<script>alert('nama paket tidak boleh kosong');location.href='ubah_paket.php';</script>";
        } elseif(empty($deskripsi)){
            echo "<script>alert('deskripsi tidak boleh kosong');location.href='ubah_paket.php';</script>";
        }elseif(empty($harga)){
            echo "<script>alert('harga tidak boleh kosong');location.href='ubah_paket.php';</script>";
        } else {
            include "koneksi.php";
        
            //upload file
            $target_dir = "foto_paket/";
            $target_file = $target_dir . basename($_FILES["foto_paket"]["name"]);
            $updateOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
                $updateOk = 0;
            }
            
            // Check if $updateOk is set to 0 by an error
            if ($updateOk == 0) {
                echo "Sorry, your file was not updated.";
                
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["foto_paket"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["foto_paket"]["name"])). " has been uploaded.";
                    $delete=mysqli_query($conn,"SELECT foto_paket FROM paket WHERE id_paket = '".$id_paket."';");
                    // fetch error untuk memproses mysqli query
                    $foto_paket=mysqli_fetch_array($delete);

                    $update = mysqli_query($conn,"UPDATE `paket` SET `jenis` = '".$jenis."', `deskripsi` = '".$deskripsi."', `harga` = '".$harga."', `foto_paket` = '".basename($_FILES["foto_paket"]["name"])."' WHERE `paket`.`id_paket` = '".$id_paket."';") or die(mysqli_error($conn));
                    
                   if($update){
                        unlink("foto_paket/".$foto_paket['foto_paket']);
                        echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
                    } else {
                        echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
                    }
                }
            }
        }
    }
?>