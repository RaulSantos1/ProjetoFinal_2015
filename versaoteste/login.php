<?php

include ("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from Form
    $mailsmartpeople = mysqli_real_escape_string($db, $_POST['mailsmartpeople']);
    $passwordsmartpeople = mysqli_real_escape_string($db, $_POST['passwordsmartpeople']);

    $sql = "SELECT mailsmartpeople FROM smartpeople WHERE mailsmartpeople='$mailsmartpeople' and passwordsmartpeople='$passwordsmartpeople'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {
        session_register("mailsmartpeople");
        $_SESSION['login_user'] = $mailsmartpeople;

        header("location: http://localhost/versaoteste1/bem_vindo.php");
    } else {
        $error = "O seu email e password estao incorrectos!";
    }
}
?>