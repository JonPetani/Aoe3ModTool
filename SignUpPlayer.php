<html>
<head>
<title>Player Signup</title>
<link href="Images/tricorn_icon.png" rel="icon" type="image/png" />
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link href="CSS/main.css" rel="stylesheet"/>
</head>
<body>
<main>
<form action="SignedUp.php" method="POST" enctype="multipart/form-data">

<label for="UsernameP">Username:</label>
<input type="text" name="Username" autocomplete="off" placeholder="Just Use Your Modder Name If You'd Like" required />

<label for="Email">Email Address:</label>
<input type="email" name="Email" autocomplete="off" placeholder="Use One You Have Access To As It Will Be Verified Later" required />

<label for="Password">Password:</label>
<input type="password" name="Password"  autocomplete="off" placeholder="Try To Make It a Mix of Numbers, Charecters, and Letters" required />

<label for="ProfilePic">Add a Nice Profile Pic If You'd Like</label>
<input type="file" name="ProfilePic" autocomplete="off"/>

<label for="ESO">ESO Name:</label>
<input type="text" name="ESO" autocomplete="off" placeholder="If You Got a ESO Account, Enter It's Username If You'd Like"/>

<label for="GR">Gameranger Name:</label>
<input type="text" name="GR" autocomplete="off" placeholder="If You Got a Gameranger Account, Enter It's Username If You'd Like"/>

<label for="Steam">Steam Name:</label>
<input type="text" name="Steam" autocomplete="off" placeholder="If You Got a Steam Account, Enter It's Username If You'd Like"/>

<label for="Cookies" class="check">This Site Uses Cookies To Store Information If You Wish. Check Off If You Agree</label>
<input type="checkbox" name="Cookies" value="Yes"/>

<label for="Terms" class="check">Our Site Has Terms of Use, You Must Agree With These Terms To Create A Account</label>
<input type="checkbox" name="Terms" value="Yes" required />

<input type="submit" class="regForm" align=center/>
</form>
</main>
<script>
$("input").after("<br><br>");
</script>
</body>
</html>