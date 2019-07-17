<?php 
include_once 'db.php';
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?= BASE_URL ?>">Home</a>
    </li>
  </ul>
  <ul class="nav navbar-nav ml-auto">
  	  <?php if(isset($_SESSION['auth']) && !empty($_SESSION['user'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL.'public/logout.php' ?>">Logout</a>
      </li>
      <?php }else{?>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL.'public/signup.php'?>">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL.'public/signin.php'?>">Signin</a>
      </li>
    <?php }?>
    </ul>
</nav>