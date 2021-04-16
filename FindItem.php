<html>
<head>
<title>Find Something</title>
<link href="Images/tricorn_icon.png" rel="icon" type="image/png" />
<link href="CSS/main.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div id="Accounts">
<p id="AccountHead">Currently Not Logged In</p>
<ul class="Hide" id="Account">
<li><a href="SignIn.php">Sign In</a></li>
<li><a href="SignUp.php">Sign Up</a></li>
</ul>
</div>
<main>
<article>
<h1>The Aoe3 Finder Tool</h1>
<h2>From Crossbowmen to Refrigeration, You Can Find Any Data You Need About A Item In The Game Here</h2>
</article>
<form action="FindItem.php" method="POST" align=center>

<label for="Category">What Type of Thing Ingame Are You Looking For?</label><br>
<input type="radio" name="Category" value="Unit" required>Unit</input><br>
<input type="radio" name="Category" value="Tech">Technology</input><br>
<input type="radio" name="Category" value="Building">Building</input><br>
<input type="radio" name="Category" value="Card">Card</input><br><br>

<label for="Mod">Which Mod You Looking This Up For? Or is it Plain Old Vanilla Aoe3?</label><br>
<input type="radio" name="Mod" value="Vanilla" required>Vanilla</input><br><br>
<?php
?>

<label for="Search_Item">Enter The Object You Want To Know About</label>
<input name="Search_Item" type="text" placeholder="Note: This Search Is Case Sensitive" autocomplete="off" required /><br><br>

<input type="submit" class="regForm"/>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
}
?>
</main>
<script>
</script>
</body>
</html>