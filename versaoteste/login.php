<?php

error_reporting(E_ALL ^ E_DEPRECATED);
if (isset($_POST['add'])) {
    $dbhost = 'localhost:3306';
    $dbuser = 'adminsmartpeople';
    $dbpass = 'smartpeople';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }

    if (!get_magic_quotes_gpc()) {
        $v_mailsmartpeople = addslashes($_POST['mailsmartpeople']);
        $v_passwordsmartpeople = addslashes($_POST['passwordsmartpeople']);
        $v_mailfacebook = addslashes($_POST['mailfacebook']);
        $v_passwordfacebook = addslashes($_POST['passwordfacebook']);
        $v_maillinkdin = addslashes($_POST['maillinkdin']);
        $v_passwordlinkdin = addslashes($_POST['passwordlinkdin']);
    } else {
        $v_mailsmartpeople = $_POST['mailsmartpeople'];
        $v_passwordsmartpeople = $_POST['passwordsmartpeople'];
        $v_mailfacebook = addslashes($_POST['mailfacebook']);
        $v_passwordfacebook = addslashes($_POST['passwordfacebook']);
        $v_maillinkdin = addslashes($_POST['maillinkdin']);
        $v_passwordlinkdin = addslashes($_POST['passwordlinkdin']);
    }


    $sql = "INSERT INTO smartpeople.registos " .
            "(mailsmartpeople,passwordsmartpeople,mailfacebook,passwordfacebook,maillinkdin,passwordlinkdin) " .
            "VALUES('$v_mailsmartpeople','$v_passwordsmartpeople','$v_mailfacebook','$v_passwordfacebook','$v_maillinkdin','$v_passwordlinkdin') ";
    mysql_select_db('smartpeople');
    $retval = mysql_query($sql, $conn);
    if (!$retval) {
        die('Could not enter data: ' . mysql_error());
    }

    header("Location: http://localhost/indexlogin.html");
    mysql_close($conn);
}
?>