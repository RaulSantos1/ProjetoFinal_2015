
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="mail@smartpeople.pt" name="mailsmartpeople" type="email" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="passwordsmartpeople" name="passwordsmartpeople" type="password" autofocus>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="mail@facebook.pt" name="mailfacebook" type="email" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="passwordfacebook" name="passwordfacebook" type="password" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="mail@linkdin.pt" name="maillinkdin" type="email" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="passwordlinkdin" name="passwordlinkdin" type="password" autofocus>
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $mailsmartpeople=$_POST['mailsmartpeople'];//same
    $passwordsmartpeople=$_POST['passwordsmartpeople'];//same
	$mailfacebook=$_POST['mailfacebook'];//same
    $passwordfacebook=$_POST['passwordfacebook'];//same
	$maillinkdin=$_POST['maillinkdin'];//same
    $passwordlinkdin=$_POST['passwordlinkdin'];//same
    


    if($mailsmartpeople=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the email')</script>";
exit();//this use if first is not work then other will not show
    }

    if($passwordsmartpeople=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }    
	if($mailfacebook=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the email')</script>";
exit();//this use if first is not work then other will not show
    }

    if($passwordfacebook=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }   
	if($maillinkdin=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the email')</script>";
exit();//this use if first is not work then other will not show
    }

    if($passwordlinkdin=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }   
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from registos WHERE mailsmartpeople='$mailsmartpeople'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $mailsmartpeople is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into registos (mailsmartpeople,passwordsmartpeople,mailfacebook,passwordfacebook,maillinkdin,passwordlinkdin) VALUE ('$mailsmartpeople','$passwordsmartpeople','$mailfacebook','$passwordfacebook','$maillinkdin','$passwordlinkdin')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>