<html>
<head>
<title>Sign Up</title>
<link href="Images/tricorn_icon.png" rel="icon" type="image/png" />
<link href="CSS/main.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<?php
if(isset($_SESSION['Logged'])) {
	if($_SESSION['Logged'] == true) {
		header("Location: UserHome.php");
		die;
	}
}
?>
<main>
<div class="Selector">
<a href="SignUpModder.php">Modders Sign Up Here</a>
<a href="SignUpPlayer.php">Everyone Else Go Here</a>
</div>
</main>
<script>
$(".Selector").after("<br clear=both>");
</script>
</body>
</html>