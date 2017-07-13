<?php
 session_start();
 //session check
 if (!isset($_SESSION['id']))
{
    header("Location: index.php");
    die();
}
 ?>
 