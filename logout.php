<?php
//logout the user
session_start();
if (isset($_SESSION['login']))
{
    unset($_SESSION['login']);
}
header("location:index.html");
?>