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

<div class = "container">
        <tbody>

                <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          </div>
        </div>
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-12">
                  <h3 class="mb-3"><center>ADD Transaction</center></h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="proses_tambah_transaksi.php" method="POST" enctype= "multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Input Data</h6>
                <div class="pl-lg-4">
                    
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label class="form-control-label" for="input-id_member">Select Member</label>
                        <select name="id_member" class="form-control" >
                        <option></option>
                            <?php 
                            include "koneksi.php";
                            $qry_member=mysqli_query($conn,"select * from member");
                            while($data_member=mysqli_fetch_array($qry_member)){
                            echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';  
                            }
                            ?>
                            </select>
                      </div><br>
                    </div>
        
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-tgl">Date</label>
                        <input type= "date" id="input-tgl" class="form-control" name="tgl" value="">
                      </div>
                    </div><br>
                  </div>
                
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-batas_waktu">Deadline</label>
                        <input type= "date" id="input-batas_waktu" class="form-control" name="batas_waktu" value="">
                      </div>
                    </div><br>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-tgl_bayar">Payment Date</label>
                        <input type= "date" id="input-tgl_bayar" class="form-control" name="tgl_bayar" value="">
                      </div>
                    </div><br>
                          </div>

                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label class="form-control-label" for="input-status">Status</label>
                        <select name="status" class="form-control" >
                            <option></option>
                            <option value="Baru">Baru</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Diambil">Diambil</option>
                        </select>
                      </div><br>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                      <label class="form-control-label" for="input-dibayar">Payment Status</label>
                        <select name="dibayar" class="form-control" >
                            <option></option>
                            <option value="Dibayar">Dibayar</option>
                            <option value="Belum_Dibayar">Belum Dibayar</option>
                        </select>
                        </div>
                    </div><br>
                          </div>

                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                      <label class="form-control-label" for="input-id_user">Select User</label>
                        <select name="id_user" class="form-control" >
                        <option></option>
                            <?php 
                            include "koneksi.php";
                            $qry_user=mysqli_query($conn,"select * from user");
                            while($data_user=mysqli_fetch_array($qry_user)){
                            echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama'].'</option>';   
                            }
                            ?>
                            </select>
                      </div><br>
                      </div>
                        </div>

                    <div>
                      <button type='submit' class="btn btn-success">Checkout</button>
                      &nbsp;
                      <a href = "tampil_transaksi.php" class = "btn btn-warning">Show Transaction</a>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        </tbody>
        </div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
 <?php 
include "footer.php";
?>