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
<br/><br/>
      
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
