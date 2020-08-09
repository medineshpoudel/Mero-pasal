
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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../retailerHome/style.css">
        <!--===============================================================================================-->

    </head>

    <body>


        <div class="header">
            <h1>MERO PASAL</h1>
            <p>Find your ideal Product and compare prices from <br>different shops</p>
        </div>





<!-- DATA INSERTION FROM HERE -->

<div class="container insertData">
<h2 class="text-center">Enter Details of Shop</h2>
<form method="post" action="../include/infoInsert.php">
<div class="row">

<div class="col">
<select class="form-control" name="category" id="category">
    </select>
</div>
</div>
	  <div class="row">
	  <div class="col">
      <input type="text" class="form-control" name="shopName" placeholder="Name of Shop">
    </div>
	</div>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="contact" placeholder="Contact Number">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="email" class="form-control" name="email" placeholder="Email Address">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="website" placeholder="Website">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="regNo" placeholder="Reg No./ PAN No.">
    </div>
  </div>
  <div class="row justify-content-center">
	  <div class="col">
	  <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
	  </div>
 
  </div>
  </form>
  </div>

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
        <script src="home/js/featuredContent.js"></script>

        <script src="../js/categoryHandler.js"></script>
        <!--===============================================================================================-->
        <script src="../js/script.js"></script>
        <!--===============================================================================================-->
    </body>

</html>
