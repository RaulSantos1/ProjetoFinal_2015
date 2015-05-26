<?php
session_start();

if(!$_SESSION['mailsmartpeople'])
{

    header("Location: index.html");//redirect to login page to secure the welcome page without login access.
}

?>

<html>
<head>

    <title>
        Registration
    </title>
</head>

<body>
<h1>Bem vindo ao SmartPeople</h1><br>
<?php
echo $_SESSION['mailsmartpeople'];
?>


<h1><a href="logout.php">SAIR</a> </h1>


</body>

</html>