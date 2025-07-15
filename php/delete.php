<?php
require_once "../connect.php";
$id = $_REQUEST["id"];
$query = "DELETE FROM signin where User_id=$id";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data Deleted successful')</script>";
    header("Location: veiw.php");
    exit();
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>