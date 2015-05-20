<?php
session_start();
if(session_destroy())
{
header("Location: http://localhost/versaoteste1/index.html");
}
?>