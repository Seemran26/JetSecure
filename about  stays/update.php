<?php
require_once "../connect.php";
$id = $_REQUEST['id'];
$sql = "SELECT * from signin where User_id='" . $id . "'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
           
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="width: 1000px; font-size: 20px;">
                    <form method="post" action="edit.php"> 
                        <div class="form-group">
                            <input type="hidden" name="user_id" value=<?php echo $_REQUEST["id"]; ?>>
                        </div><br><br>
                        <div class="form-group">
                            <label for="username">Name: </label>
                            <input type="name" class="form-control" style="width: 600px; font-size: 20px;" aria-describedby="emailHelp" name="username" value=<?php echo $row["Username"]; ?>>
                        </div><br>
                        <div class="form-group">
                            <label for="email">Email address: </label>
                            <input type="email" class="form-control" style="width: 600px; font-size: 20px;"  aria-describedby="emailHelp" name="email" value=<?php echo $row["Email"]; ?>>
                        </div><br>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" style="width: 600px; font-size: 20px;"  name="password" required value=<?php echo $row["Password"]; ?>>
                        </div><br><br>

                        <button type="submit" style="width: 160px; font-size: 20px;"  name="submit" class="btn btn-primary" value="Update">Submit</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
    <!-- Sidebar-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Flights</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <div id="signupbtn" class="mx-2">
                <a class=" btn btn-outline-light icon-link icon-link-hover" data-bs-toggle="modal"
                    data-bs-target="#signupModal" href="#loginModal">
                    <i class="bi-person-circle" style="margin-right: 4px; "></i>Sign in
                </a>
            </div>
        </ul>
    </nav>

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center" style="width: 100%">
                <h2 class="title" style="color: white; font-size: 40px;">Flights Available:</h2>
            </div>
        </div>
    </section>
    <!--Breadcrumb Area-->
    


    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="width: 1000px; font-size: 20px;">
                    <form method="post" action="edit.php"> 
                        <div class="form-group">
                            <input type="hidden" name="user_id" value=<?php echo $_REQUEST["id"]; ?>>
                        </div><br><br>
                        <div class="form-group">
                            <label for="username">Name: </label>
                            <input type="name" class="form-control" style="width: 600px; font-size: 20px;" aria-describedby="emailHelp" name="username" value=<?php echo $row["Username"]; ?>>
                        </div><br>
                        <div class="form-group">
                            <label for="email">Email address: </label>
                            <input type="email" class="form-control" style="width: 600px; font-size: 20px;"  aria-describedby="emailHelp" name="email" value=<?php echo $row["Email"]; ?>>
                        </div><br>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" style="width: 600px; font-size: 20px;"  name="password" required value=<?php echo $row["Password"]; ?>>
                        </div><br><br>

                        <button type="submit" style="width: 160px; font-size: 20px;"  name="submit" class="btn btn-primary" value="Update">Submit</button>
                    </form>
                 </div>
            </div>
        </div>
    </section>



    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>


