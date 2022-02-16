<?php
session_start();
if($_SESSION['role']=="admin"){
    include ("admin.php"); 
}elseif ($_SESSION['role']=="kasir"){
include ("kasir.php");
}
$base_url = "http://localhost/ukl_laundry/"; //digunakan untuk menghubungkan setiap page supaya webnya dinamis
?>

<!DOCTYPE html>
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
<body>

<div class="overlay">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Laundrix</h3>
        <p>WE OFFER THE BEST LAUNDRY SERVICES</p>
        <p>The Laundry Company provides a premium laundry, ironing, dry cleaning and alteration service for domestic and small businesses in the US.</p>
        <br></br>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
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
    <section id="introblocks">
      <div class="group btmspace-50 demo">

        <li class="one_quarter first">
          <figure><a class="imgover" href="#"><img src="images/demo/kiloo.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Kiloan</h6>
              <div>
                <p>Rp. 5000/kg</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/selimut.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Selimut</h6>
              <div>
              <p>Rp. 10000/kg</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/bed.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Bed Cover</h6>
              <div>
              <p>Rp. 25000/kg</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/kaos.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Kaos</h6>
              <div>
              <p>Rp. 2000/kg</p>
              </div>
            </figcaption>
          </figure>
        </li>

      </ul>
    </section>
    <!-- ################################################################################################ -->
    <hr class="btmspace-80">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/02.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Services you will love</p>
      <p class="heading underline font-x2">WE ARE PASSIONATE ABOUT LAUNDRY</p>
    </div>
    <article class="btmspace-80">
      <blockquote>We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics.

</blockquote>
      <figure class="clear"><img src="images/demo/Ownerr.png" alt="">
        <figcaption>
          <h6 class="heading">Tasya Syafira Sinrani</h6>
          <em>Owner</em></figcaption>
      </figure>
    </article>
    <footer class="center"><a class="btn" href="#">More Testimonials</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>

<?php 
include "footer.php";
?>