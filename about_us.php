<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/frontend.css">
	<link rel="stylesheet" type="text/css" href="css/about_us.css">
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
						<img class="pic_logo" src="pictures/SurveyPortal Logo.png">
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_content_2">

						<?php
							require('connection.php');

							$sqlView = "SELECT about FROM tbl_about WHERE id = 1";
							$result= mysqli_query($link, $sqlView);

							while ($row = mysqli_fetch_array($result)) {
								echo $row['about'];
							}
						?>
						<br><br>
						<?php
							require('connection.php');

							$sqlView = "SELECT about FROM tbl_about WHERE id = 2";
							$result= mysqli_query($link, $sqlView);

							while ($row = mysqli_fetch_array($result)) {
								echo $row['about'];
							}
						?>

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

</body>

</html>