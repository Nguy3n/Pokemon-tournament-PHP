<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link href="css/main.css" rel="stylesheet">
</head>
<body>
<nav id="nav01"></nav>
<div id="hoved">

<h1>Admin</h1>

<div class='login'>
<h2>Logg inn</h2>
<form action="" method="post">
<label>Brukernavn:</label>
<br/>
<input id="navn" name="brukernavn" type="text">
<br/>
<label>Passord:</label>
<br/>
<input id="passord" name="passord" type="password">
<br/>
<input name="submit" type="submit" value="login ">
</form>
</div>


<?php
    include 'includes/login.php';
    
    if(isset($_SESSION['login'])) {
        header("location: innlogget.php");
    }
?>

</div>
<footer id="foot01"></footer>
<script src="js/script.js"></script>
</body>
</html>
