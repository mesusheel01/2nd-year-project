<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Survey</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/frontend.css">
	<link rel="stylesheet" type="text/css" href="css/survey.css">
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
	<!-- Survey area -->
	<div class="container">

		<!-- PHP -->

		<?php
			require('connection.php');

			$sqlView = "SELECT * FROM tbl_topics";
			$result = mysqli_query($link, $sqlView);
			$count = mysqli_num_rows($result);

			if ($count != 0) {
				echo "				
				<h2>Welcome! Thank you for giving time to see this.</h2>
				<h3>Here are the topics you can answer.</h3> 
				<p>Feel free to take your time choosing among the topics</p>
				<p>&nbsp;</p>
				
				<table class=tblsurvey cellspacing=10 cellpadding=0>";
					while ($row = mysqli_fetch_array($result)) {
						$topic = $row['topic'];

						echo "<tr>
							<td class=tdtopic>" .
								$topic .
							"</td>
							<td class=tdbtn>
								<a href=answer_survey.php?=$row[id]><input class=btntopic type=button value=Take><a/>
							</td>
						</tr>";
					}
				echo "</table>`
				<p>&nbsp;</p>";
			}
			else {
				echo "<td><h1>Sorry! No topics at the moment...</h1></td>
				<img class=sorry src=pictures/Sorry.jpg>";
			}
		?>
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