<!DOCTYPE html>
<html>
<head>
<title>Registrer</title>
<link href="css/main.css" rel="stylesheet">
</head>
<body>
<nav id="nav01"></nav>
<div id="hoved">

<!--<h1>Registrer ny trener</h1>

<div class='login'>
<h2>Logg inn</h2>
<form action="" method="post">
<label>Fornavn:</label>
<br/>
<input id="first_name" name="first_name" type="text">
<br/>
<label>Etternavn:</label>
<br/>
<input id="last_name" name="last_name" type="text">
<br/>
<label>Hjemby:</label>
<br/>
<input id="hometown" name="hometown" type="text">
<br/>
<label>Alder:</label>
<br/>
<input id="age" name="age" type="text">
<br/>
<label>Telefon:</label>
<br/>
<input id="phone_number" name="phone_number" type="text">
<br/>
<input name="register" type="submit" value="register">
</form>
</div>-->


<h1>Registrering er over i Oblig3.</h1>

<?php
    $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");
    
    if(isset($_POST['first_name'])) {
        $first_name = $_POST['first_name'];
    }
    
    if(isset($_POST['last_name'])) {
        $last_name = $_POST['last_name'];
    }
    
    if(isset($_POST['hometown'])) {
        $hometown = $_POST['hometown'];
    }
    
    if(isset($_POST['age'])) {
        $age = $_POST['age'];
    }
    
    if(isset($_POST['phone_number'])) {
        $phone_number = $_POST['phone_number'];
    }
    
    
    if(isset($_POST['register'])) {
        
        $sql = "Insert INTO trainer (first_name, last_name, hometown, age, phone_number)";
        $sql .="Values ('$first_name','$last_name', '$hometown','$age','$phone_number')";
        $resultat = mysqli_query($db_connect,$sql); 
        
    }
?>

</div>
<footer id="foot01"></footer>
<script src="js/script.js"></script>
</body>
</html>
