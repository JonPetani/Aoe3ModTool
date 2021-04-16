<html>
<head>
<title>AOE3 Modding Web-Tool</title>
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
<h1>Welcome to the Age of Empires 3 Modding Web-Tool</h1>
<h2>This Platform was created to make Modding Easier and Game Info more accessable to both the experienced modder and everyday player of AOE3</h2>
</article>
<h3>Which Tool Do You Need?</h3>
<ul id="Nav">
<a href="FindItem.php"><div class="buttontype"><li><h2>Finder Tool</h2>
<ul class="Hide" id="Find" hidden>
<li>This Tool Allows Users To Find A Element In The Game (Unit, Tech, Building, etc)</li>
<li>The Purpose Is To Get Around Understanding The AOE3 File System getting you to game info you need.</li>
<li>For Developers, This System Replaces The Need For A Wiki Assuming You Include Your Mod Files On Our Platform As Users Can Find The Info On Their Own Here.</li>
</ul></li></div></a>
<li></li>
</ul>
<script>

$(".FindItem").children("li").mouseenter(function() {
$(this).children().;
});

$(".FindItem").children("li").mouseleave(function() {
$(this).children().toggle();
});

</script>
</main>
<footer>
</footer>
</body>
</html>