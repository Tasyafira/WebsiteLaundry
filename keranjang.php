<?php
session_start();
?>
<!DOCTYPE html>
<!--
Template Name: Nocobot
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Laundrix</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +62 823 395 431 69</li>
        <li><i class="far fa-envelope rgtspace-5"></i> laundrix@gmail.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="Logout.php" title="Logout"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href="index.php">Laundrix</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="Admin.php">Home</a></li>
          <li><a class="drop" href="#">Member</a>
            <ul>
              <li><a href="tambah_member.php">Add Member</a></li>
              <li><a href="tampil_member.php">Show Members</a></li>
            </ul>
          </li>

          <li><a class="drop" href="#">User</a>
            <ul>
              <li><a href="tambah_user.php">Add User</a></li>
              <li><a href="tampil_user.php">Show User</a></li>
            </ul>
          </li>

          <li><a class="drop" href="#">Package</a>
            <ul>
              <li><a href="tambah_paket.php">Add Package</a></li>
              <li><a href="tampil_paket.php">Show Package</a></li>
              <li><a href="paket.php">Checkout Package</a></li>
            </ul>
          </li>

          <li><a href="tampil_transaksi.php">Show Transaction</a></li>

        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <center>
      <h1>Keranjang :</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
            <th>NO</th>
            <th>Paket</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
        foreach ($_SESSION['cart'] as $key_paket => $val_paket): 
        $subtotal=$val_paket['subtotal'];

        
        $subtotal2=number_format($subtotal,2);?>

            <tr>
                <td><center><?=($key_paket+1)?><center></td> 
                <td><?=$val_paket['jenis']?></td>
                <td><?=$val_paket['qty']?></td> 
                <td><?php echo("Rp ".$subtotal2);?></td> 
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger"><strong>X</strong></a></td>

            </tr>


        <?php endforeach ?>

          </tbody>
        </table>
        
        <a href="paket.php" class="btn btn-success">ADD Package</a>
        <a href="tambah_transaksi.php" class="btn btn-success">Isi Form</a>
          </center>
      </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
 <?php 
include "footer.php";
?>