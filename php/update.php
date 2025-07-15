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
    <title>Flight</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=".a/css/bootstrap.css">
    <link rel="stylesheet" href="./vendors/linericon/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="./vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="./vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-image: url('../Images/air123.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
           
<div>
    <!-- Sidebar-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">DotSky</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

        </ul>
    </nav>


    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area" style="margin-top: 100px;">

    </section>
    <!--Breadcrumb Area-->


    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
    <div style="color:white; background-color: rgba(8, 8, 8, 0.336); padding: 40px; width: 40%; margin-left: 600px;" >
    <form method="post" action="edit.php" > 
    <h2 class="title" style="color: black; font-size: 60px; font-weight: 800; text-align:center;">User Data:</h2>
                        <div class="form-group">
                            <input type="hidden" name="user_id" value=<?php echo $_REQUEST["id"]; ?>>
                        </div><br><br>
                        <div class="form-group">
                            <label for="username" style="font-size: 24px;"><b>Name: </b></label>
                            <input type="name" class="form-control" style="width: 660px; font-size: 20px;" aria-describedby="emailHelp" name="username" value=<?php echo $row["Username"]; ?>>
                        </div><br>
                        <div class="form-group">
                            <label for="email" style="font-size: 24px;"><b>Email address: </b></label>
                            <input type="email" class="form-control" style="width: 660px; font-size: 20px;"  aria-describedby="emailHelp" name="email" value=<?php echo $row["Email"]; ?>>
                        </div><br>
                        <div class="form-group">
                            <label for="password" style="font-size: 24px;"><b>Password: </b></label>
                            <input type="password" class="form-control" style="width: 660px; font-size: 20px;"  name="password" required value=<?php echo $row["Password"]; ?>>
                        </div><br><br>

                        <button type="submit" style="width: 160px; font-size: 20px; margin-left: 260px;"  name="submit" class="btn btn-primary" value="Update">Submit</button>
                    </form>
    </div>
    </section>

    


    </div>
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