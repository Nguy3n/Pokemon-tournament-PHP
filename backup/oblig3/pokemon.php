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
      <h1>Informasjon om registrerte Pokémons</h1>
 
  
  <?php
    $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");

    $sql = "select name, type, attack1, attack2, attack3, attack4, owner, image from pokemon, trainer where pokemon.owner = trainer.trainer_id";
    
    
    $result = mysqli_query($db_connect, $sql);
    
    // Print
    echo '<ul>';
    
    
    
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<form style='font-weight:bold;'>";    
        echo "<img src='" .$row['image'] ."'/><br/>";
        echo $row['name'] ."<br/>";
        echo "Type: " .$row['type'] ."<br/>";
        echo "<u>Angrep: </u><br/>" .$row['attack1'] ."<br/>";
        echo $row['attack2'] ."<br/>";
        echo $row['attack3'] ."<br/>";
        echo $row['attack4'] ."<br/>";
        
       
        echo "</form>";
        echo "&nbsp &nbsp"; 
        
        }
    } 
    else {
        echo "0 results";
    }
    echo '</ul>';
  ?>
      </div>
  <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>