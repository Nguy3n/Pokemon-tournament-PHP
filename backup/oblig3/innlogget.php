<!-- PHP koden begrenser tilgang til kun admin-->

<?php
session_start();

echo "<div id='uniquename' style='display:none;'>";



if($_SESSION["login"]==$bruker){
  header('Location: index.php');
} else {
  echo "Du må være admin for å kunne komme inn på denne siden!";
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
  
      <h2><a href="kampoppsett.php">Kampoppsett</a></h2>
      
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
  

  
  <!--Ny Arena-->
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

<label>Bilde av arena(trenger kun navnet på filen):</label>
<br/>
<input id="image" name="image" type="text">
<br/>

<input name="new_stage" type="submit" value="register arena">
</form>


<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
Velg bilde av arena for å laste opp: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Last opp bildefil" />
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
    
    $image = 'images/stage/';
    if(isset($_POST['image'])) {
        $image .= $_POST['image'];
    }
    
    if(isset($_POST['new_stage'])) {
        
        $sql = "Insert INTO stage (type, address, amount_seats, image)";
        $sql .="Values ('$type','$address', '$amount_seats' , '$image')";
        $resultat = mysqli_query($db_connect,$sql); 
        
    }
    ?>
  
  
  </br>
  <!--Logge ut funksjon-->
  <form action="" method="post">
      <button name='loggut'>Logg ut</button>
      </form>
  </div>
  <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>
