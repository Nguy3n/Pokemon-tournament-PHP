<!--
Brukernavn: admin@pokemon.no
Passord: Asdfasdf1
-->

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link href="css/main.css" rel="stylesheet">
<script type="text/javascript">
    function valider_navn()
    {
        regEx = (/^[^@]+@[^@]+\.[^@]+$/);
        OK = regEx.test(document.skjema.brukernavn.value);
        if(!OK)
        {
            document.getElementById("feilNavn").innerHTML="Feil i navnet, dette må være i epost format.";
            return false;
        }
        document.getElementById("feilNavn").innerHTML="";
        return true;
    }
    
    
    function valider_passord() 
    {
        regEx = (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,20}$/);
                
        OK = regEx.test(document.skjema.passord.value);
        if(!OK)
        {
            document.getElementById("feilPass").innerHTML="Feil i passord format, den må være mellom 6 til 20 tegn lang med minst én stor bokstav, én liten bokstav og et tall!";
            return false;
        }
        document.getElementById("feilPass").innerHTML="";
        return true;
    }
</script>
</head>
<body>
<nav id="nav01"></nav>
<div id="hoved">

<h1>Admin</h1>

<div class='login'>
<h2>Logg inn</h2>
<form action="" name="skjema" method="post">
    <table>
        <tr>
            <td>Brukernavn:</td>
            <td><input id="navn" name="brukernavn" type="text" onchange="valider_navn()"></td>
            <td><div id="feilNavn">*</div></td>
        </tr>
        <tr>
            <td>Passord:</td>
            <td><input id="passord" name="passord" type="text" onchange="valider_passord()"></td>
            <td><div id="feilPass">*</div></td>
        </tr>   
        <tr>
            <td><input name="submit" type="submit" value="login "></td>
        </tr>
    </table>
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
