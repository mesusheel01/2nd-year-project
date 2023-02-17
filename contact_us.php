<!DOCTYPE html>
<html>

<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/frontend.css">
	<link rel="stylesheet" type="text/css" href="css/contact_us.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
</head>

<body>

	<!-- Navigation -->
	<header>

<div class="project">
	<div class="nav">
		<div class="logo">
			<a href="index.php"><img src="pictures/logo.png" alt="logo" id="logo"></a>
		</div>
		<div class="nav-btn">
			<label for="nav-check">
				<span></span>
				<span></span>
				<span></span>
			</label>
		</div>
		<div class="navbar">
			<ul>
				<li><a id="icon" href="index.php">HOME</a></li>
				<li><a id="icon" href="survey.php">SURVEY</a></li>
				<li><a id="icon" href="contact_us.php">CONTACT US</a></li>
				<li><a id="icon" href="about_us.php">ABOUT US</a></li>
			</ul>
		</div>

	</div>
</div>
</header>

	<!-- Two Cards -->
	<div class="main">
		<ul class="cards">
			<li class="cards_item">
				<div class="card">
					<div class="card_content_1">
						<h2>Message Us</h2>
							<form method="post" action="contact_us.php">
								<input class="txtbx" id="firstname" maxlength="30" name="firstname" oninput="text()" placeholder="Firstname" type="text" required/>
								<input class="txtbx" id="lastname" maxlength="30" name="lastname" oninput="text()" placeholder="Lastname" size="40" type="text" required/>
								<textarea id="message" name="message" placeholder="Message" required></textarea>
								<input id="submit" name="btnmessage" onclick="message()" type="submit" value="SUBMIT" />
							</form>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_content_2">
						<h2 align="center">Get in Touch</h2>
						<p>You may also reach us throught the following:</p>
						<div class="row">
							<img src="pictures/Number.png">
							<div class="icondescrip">999999999</div>
						</div>
						<div class="row">
							<img src="pictures/Email.png">
							<div class="icondescrip">surveyportal@gmail.com</div>
						</div>
						<div class="row">
							<img src="pictures/Facebook.png">
							<div class="icondescrip">facebook.com/SurveyPortal</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	
	<!-- Footer -->
	<div class="footer-section">
		<hr>
		<div class="copyright-area">
			<div class="copyright-text">
				<p>Copyright &copy; 2018</p>
			</div>
		</div>
	</div>

	<script src="js/function.js"></script>

</body>

</html>

<!-- PHP -->

<?php
	if (isset($_POST['btnmessage'])) {
		require('connection.php');

		$id = rand(10000, 99999);
		$first = $_POST['firstname'];
		$last = $_POST['lastname'];
		$mes = $_POST['message'];
		
		$sqlSave = "INSERT INTO tbl_message(id, firstname, lastname, message) 
		VALUES('$id', '$first', '$last', '$mes')";

		mysqli_query($link, $sqlSave);
		echo "<script>alert('Your message sent.')</script>";
	}
?>