<?php
    include ("koneksi.php");
    $base_url = "http://localhost/ukl_laundry/"; //digunakan untuk menghubungkan setiap page supaya webnya dinamis
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">


            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-secondary">Laundrix</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?php echo $base_url; ?>dashboard.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href=" <?php echo $base_url; ?>tambah_produk.php" >Tambah Produk</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href=" <?php echo $base_url; ?>tambah_member.php" >Tambah Member</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href=" <?php echo $base_url; ?>tambah_petugas.php" >Tambah Petugas</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href=" <?php echo $base_url; ?>tambah_transaksi.php" >Tambah Transaksi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href=" <?php echo $base_url; ?>tambah_detail_transaksi.php" >Tambah Detail Transaksi</a>
                </div>
            </div>


            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-secondary border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="Admin">Admin</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="dashboard.php">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                                        <a class="dropdown-item" href="tambah_produk.php">Tambah Produk</a>
                                        <a class="dropdown-item" href="tambah_pelanggan.php">Tambah Pelanggan</a>
                                        <a class="dropdown-item" href="tambah_petugas.php">Tambah Petugas</a>
                                        <a class="dropdown-item" href="tambah_transaksi.php">Tambah Transaksi</a>
                                        <a class="dropdown-item" href="tambah_detail_transaksi.php">Tambah Detail Transaksi</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>