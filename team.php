<html>
<head>
	<title>Team</title>
	<link rel="stylesheet" href="team.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
		<img src="logo.png" class="logo">
		<a>USERNAME</a>
	</header>

	<main>
		<section>

			<div class="datetime">
         <span class="date">Date :</span>
      <input type="text" name="userid" placeholder="dd-mm-yyyy" class="time">
      <span class="date">Time :</span>
      <input type="text" name="passs" placeholder="hh:mm:ss" class="time">
           </div>


			<div class="grid-container">
				<div class="grid-item">
					<p class="inline">TEAM1</P>
						<input type="radio" name="butt" class="inline">
                    <p class="text">Name</p>
                    <input type="text" class="text_name">
                    <p class="text">Total number of player 11</p>
                    <p class="text">Number of booked players 8</p>
                    <input type="button" value="PAY" onclick="location.href='success.php'" class="button_ok">
				</div>

				<div class="grid-item">
					<p class="inline">TEAM2</P>
						<input type="radio" name="butt" class="inline">
                    <p class="text">Name</p>
                    <input type="text" class="text_name">
                    <p class="text">Total number of player 11</p>
                    <p class="text">Number of booked players 8</p>
                    <input type="button" value="PAY" onclick="location.href='success.php'" class="button_ok">
				</div>
			</div>
		</section>
</main>


<footer>
	
		<a href="aboutus.html">ABOUT US</a>
		<a href="contactus.html">CONTACT US</a>
		<div class="footer_size">
		<img src="fb-logo.jpg" class="image_size">
		<img src="twitter.png" class="image_size">
		<img src="instagram.png" class="image_size">
	</div>

</footer>
</body>
</html>