<!DOCTYPE html>
 <html lang="en">

     <head>
         <title>Mero Pasal</title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--===============================================================================================-->
         <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/bootstrap/css/bootstrap.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/animate/animate.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/css-hamburgers/hamburgers.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="../Login/vendor/select2/select2.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" href="../home/style.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" href="style.css">
          <!--===============================================================================================-->


     </head>

     <body>
         <nav id="nav" class="navbar navbar-expand-lg bg-light fixed-top">
             <div class="container-fluid wave">
                 <span>
                     <a class="navbar-brand" href="index.html">
                         <img id="logo" src="img/logo.png" class="d-inline-block align-top" alt="L O G O">
                     </a>
                 </span>
                 <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-end" id="collapse_target">
                     <ul class="navbar-nav">
                         <li class="nav-item"><a id="navItems" href="/Login/" class="nav-link button"> <i
                                     class="fa fa-user"></i> Login or SignUp</a></li>
                     </ul>
                 </div>
             </div>
         </nav>
         <!--============================================= 
            Header 
        ================================================-->

         <div class="header">
             <h1>MERO PASAL</h1>
             <p>Find your ideal Product and compare prices from <br>different shops</p>
        </div>

<!-- CUSTOMER INFOS -->

<!-- DATA INSERTION FROM HERE -->

<div class="container insertData">
<h2>Enter the Detail of Product</h2>
    <form action= "../include/insert.php" method= "GET">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="productName" placeholder="Product Name">
    </div>
    <div class="col">
    <input type="file"  name = "productImage" class="form-control-file" id="image">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="number" class="form-control" name="price" placeholder="Product Price">
    </div>
    <div class="col">
    <select id="inputState" name="location" class="form-control">
                                 <!-- Contents From JS File -->
                                 </select>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="shopName" placeholder="Shop Name">
    </div>
    <div class="col">
    <select class="form-control" name="remarks" id="exampleFormControlSelect1">
      <option>Select Remarks</option>
      <option>Featured Product</option>
      <option>Non-featured Product</option>
    </select>
    </div>
  </div>
  <div class="row">
  <div class="col">
    <select class="form-control" id="category" name="category" id="exampleFormControlSelect1">
    </select>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
</form>
</div>







              <!--====================================================== 
            Footer Area 
        ============================================================-->
         <footer id="footer" class="footer text-center">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <h4>MERO PASAL</h4>
                         <div class="footer-social">
                             <ul>
                                 <li><a target="_blank" href="https://www.facebook.com"><i
                                             class="fa fa-facebook"></i></a></li>
                                 <li><a href="callto:"><i class="fa fa-phone"></i></a></li>
                                 <li><a href="mailto:"><i class="fa fa-envelope"></i></a></li>
                                 <li><a target="_blank" href="#"><i class="fa fa-globe"></i></a></li>
                             </ul>
                         </div><!-- Footer social end -->

                         <div class="footer-menu">
                             <ul class="nav unstyled justify-content-center">
                                 <li><a href="#">About</a></li>
                                 <li><a href="Login/index.html">Login</a></li>
                                 <li><a href="#">SignUp</a></li>
                                 <li><a href="#">Products</a></li>
                                 <li><a href="#">Contact</a></li>
                             </ul>
                         </div><!-- Footer menu end -->

                         <div class="copyright-info">
                             <span>Copyright &copy2019 <a href="#">Mero Pasal</a>.All
                                 Rights
                                 Reserved.</span>
                         </div><!-- Copyright info end -->

                     </div><!-- Content col end -->
                 </div><!-- Content row end -->
             </div><!-- Container end -->

             <div class="footer-pattern"></div> <!-- Footer pattern image -->


         </footer><!-- Footer end -->

         <!--===============================================================================================-->
         <script src="../Login/vendor/jquery/jquery-3.2.1.min.js"></script>
         <!--===============================================================================================-->
         <script src="../Login/vendor/bootstrap/js/popper.js"></script>
         <script src="../Login/vendor/bootstrap/js/bootstrap.min.js"></script>
         <!--===============================================================================================-->
         <script src="../Login/vendor/select2/select2.min.js"></script>
         <!--===============================================================================================-->
         <script src="../Login/vendor/tilt/tilt.jquery.min.js"></script>
         <!--===============================================================================================-->
         <script src="../js/locationListHandler.js"></script>
         <script src="../js/categoryHandler.js"></script>
         <!--===============================================================================================-->
         <script src="js/featuredContent.js"></script>
         <!--===============================================================================================-->
         <script src="js/nearYou.js"></script>
         <!--===============================================================================================-->
         <script src="js/recentlyViewed.js"></script>
         <!--===============================================================================================-->
         <script src="js/categoriesHandler.js"></script>
         <!--===============================================================================================-->
         <script src="script.js"></script>
         <!--===============================================================================================-->
     </body>

 </html>
