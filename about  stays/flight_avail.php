<?php

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);
require_once "../connect.php";
$sql = "SELECT * FROM signin";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flight</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
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

<body>
           

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
           <div class="row mb_80" >
                <div class="col-lg-12 col-md-8" style="color:white" >
                    <div class="facilities_item">

                    <?php 
                    if ($result === false) {
                        echo "Error executing the query: " . $conn->error;
                    } else {
                        // Check if there are rows in the result
                        if ($result->num_rows > 0) {
                                echo "<table class='table table-dark'>
                                        <thead>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                    
                                        if (mysqli_num_rows($result) > 0) {

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>
                                                        <td>' . $row["User_id"] . '</td>
                                                        <td>' . $row["Username"] . '</td>
                                                        <td>' . $row["Email"] . '</td>
                                                        <td>' . $row["Password"] . '</td>
                                                        <td><a href="update.php?id=' . $row["User_id"] . '">Edit</a>/<a href="delete.php?id=' . $row["User_id"] . '">DELETE</a>
                                                        <tr>';
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                        
                          
                        ?> 
                    </div>
                </div>

            
        </div>
    </section>

    </div>

    <div class="container " style="margin-top: 40px;">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="about/about.html" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <hr class="border border-dark border-2 opacity-100" style="margin-top: 2px;">

            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>

    

    <?php
                           }   }
                      
?>

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

?>
