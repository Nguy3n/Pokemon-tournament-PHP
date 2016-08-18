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
<?php

$target_path = "images/stage/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "Filen ".  basename( $_FILES['uploadedfile']['name']). 
    " er lastet opp";
} else{
    echo "Det ble feil med opplastingen!";
}

?>
  </div>
    <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>