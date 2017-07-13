<?php
include('../admin/functions/book.php');
//getting an category id through url
$catid = $_GET['id'];
//initializing an Book class
$obj = new Book();
//passing an id to countBook function of a Book class
$result = $obj->countBook($catid);
?>