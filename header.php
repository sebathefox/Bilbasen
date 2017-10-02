<?php
//header.php

echo '
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <link rel="shortcut icon" href="pictures/icon.ico" />
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<header>
 <h1>Banner Her</h1>
</header>

<nav>
<ul class="navbar">
	<li class="navbar"><a class="navbar" href="index.php" >Hjem</a></li>
	<li class="navbar"><a class="navbar" href="#about.php">Om os</a></li>
	<!-- dropdown menuen -->
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="#signup.php">Opret ny bruger</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
	<li class="navbar righty"><a class="navbar" href="login.php">Log Ind</a></li>
</li>
</ul>
</nav>';

?>
