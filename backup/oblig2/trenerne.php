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
      <h1>Trenerne</h1>
      
  <?php
    $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");
    $sql = "select first_name, last_name, hometown, age, phone_number, image from trainer";
    $result = mysqli_query($db_connect, $sql);
    
    // Print
    echo '<ul>';
    
    
    
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<form>";    
        echo "<img src='" .$row['image'] ."'/><br/>" .$row['first_name'] ." " .$row['last_name']. " er " . $row['age'] ." år<br/>" 
            ." og fra " .$row['hometown'] .".<br>";
        echo "Tlf: " .$row['phone_number'] ."<br/><br/>";
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
