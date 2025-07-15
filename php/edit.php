<?php
require_once "../connect.php";

if (isset($_POST["submit"])) {
    $id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $update = "UPDATE signin SET Username = '$username', Email='$email', Password= '$password' WHERE User_id='$id'";

    if (mysqli_query($conn, $update)) {
        echo "Data Updated successfully";
        header("Location: veiw.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}
?>