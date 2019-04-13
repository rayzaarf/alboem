<?php 
if(!isset($_SESSION))
{
  session_start(); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Berbagi Album</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= BASEURL; ?>/css/bootstrap.css">
    <script src="main.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Album</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Upload <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/profile">Profile</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL;?>/settings">Settings</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/frontpage/logout">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
