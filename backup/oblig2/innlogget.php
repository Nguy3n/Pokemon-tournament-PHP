<!-- PHP koden begrenser tilgang til kun admin-->

<?php
session_start();

echo "<div id='uniquename' style='display:none;'>";



if($_SESSION["login"]==$bruker){
  header('Location: innlogget.php');
} else {
  echo "you need the admin role to view this page!";
}

echo "</div>";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Webprogrammering 2016</title>
  <link href="css/main.css" rel="stylesheet">
  <meta charset="UTF-8">
</head>
<body>
  <nav id="nav01"></nav>
  <div id="hoved">
      Velkommen, 
          <?php 
      echo $_SESSION['login']."."; ?>
      
      <h1>Gratulerer!</h1>
      <p>Du har lykket med å logge deg inn som admin!</p>

   
      
      
      Hemmelig side.
      
  
  <h1>Registrer ny konkurrent</h1>

<div class='login'>
<h2>Ny trener</h2>
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
</div>
  
  
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
  
  
  <?php
    
    if(isset($_POST['loggut'])) {
        session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
    }
  ?>

  <br/>
  
    <h1>Registrer ny Arena</h1>

<div class='login'>
<h2>Ny Arena</h2>
<form action="" method="post">
<label>Type:</label>
<br/>
<input id="type" name="type" type="text">
<br/>
<label>Adresse:</label>
<br/>
<input id="address" name="address" type="text">
<br/>
<label>Antall seter:</label>
<br/>
<input id="amount_seats" name="amount_seats" type="text">
<br/>

<input name="new_stage" type="submit" value="register arena">
</form>
</div>
  
  
  <?php
    $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");
    
    if(isset($_POST['type'])) {
        $type = $_POST['type'];
    }
    
    if(isset($_POST['address'])) {
        $address = $_POST['address'];
    }
    
    if(isset($_POST['amount_seats'])) {
        $amount_seats = $_POST['amount_seats'];
    }
    
  
    
    if(isset($_POST['new_stage'])) {
        
        $sql = "Insert INTO stage (type, address, amount_seats)";
        $sql .="Values ('$type','$address', '$amount_seats')";
        $resultat = mysqli_query($db_connect,$sql); 
        
    }
?>
  
  
  </br>
  <form action="" method="post">
      <button name='loggut'>Logg ut</button>
      </form>
  </div>
  <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>
