<html>
<head>
<title>Modder Signup</title>
<link href="Images/tricorn_icon.png" rel="icon" type="image/png" />
<link href="CSS/main.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<main>
<form action="SignedUp.php" method="POST" enctype="multipart/form-data">

<label for="Name">The Name Fellow Modders / Players Know You By:</label>
<input type="text" name="Name" autocomplete="off" placeholder="Enter Your Modder Name" required />

<label for="Mod">The Name Of Your Mod(s):</label>
<input type="text" name="Mod" autocomplete="off" placeholder="Enter Your Mod's Official Name" required />

<label for="Role">Modder Role(s)</label>
<input type="text" name="Role" autocomplete="off" placeholder="If You Have A Title On Your Mod Team, Provide it Here (Optional)"/>

<label for="UsernameM">Username:</label>
<input type="text" name="Username" autocomplete="off" placeholder="Just Use Your Modder Name If You'd Like" required />

<label for="Email">Email Address:</label>
<input type="email" name="Email" autocomplete="off" placeholder="Use One You Have Access To As It Will Be Verified Later" required />

<label for="Password">Password:</label>
<input type="password" name="Password"  autocomplete="off" placeholder="Try To Make It a Mix of Numbers, Charecters, and Letters" required />

<label for="ProfilePic">Add a Nice Profile Pic If You'd Like</label>
<input type="file" name="ProfilePic" autocomplete="off"/>

<label for="Cookies" class="check">This Site Uses Cookies To Store Information If You Wish. Check Off If You Agree</label>
<input type="checkbox" name="Cookies" value="Yes"/></input>

<label for="Terms" class="check">Our Site Has Terms of Use, You Must Agree With These Terms To Create A Account</label>
<input type="checkbox" name="Terms" value="Yes" required />

<input type="submit" class="regForm" align=center />
</form>
</main>
<script>
$("input").after("<br><br>");
</script>
</body>
</html>