 <?php
 session_start();
 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
		<div class="main-wrapper">
			<ul>
				<li>
					<a href="index.php">HOME</a>
				</li>
			</ul>
			<div class="nav-login">

				<?php

					if(isset($_SESSION['u_id'])){
						echo '<div class="topnav">
  <a href="Bicycles">Bicycle</a>
  <a href="books.php">Books</a>
  <a href="add.php">Add</a>
						<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
							</form></div>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/Email">
							<input type="password" name="pwd" placeholder="Password">
							<button type="submit" name="submit" class="button_login">Login</button>
							</form>
							<a href="signup.php">Sign Up</a>';		
					}

				?>
				
			</div>
		</div> 
		</nav>
	</header>