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
      <h1>Kampene</h1>
      <h2>Første runde</h2>
  
  <?php
    include 'includes/db_connect.php';
    
    
    $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");
    
    $sql_count = "select image from trainer";
    $result_count = mysqli_query($db_connect, $sql_count);
    
    $sql = "select image from trainer";
    $result = mysqli_query($db_connect, $sql);
    $counter = 0;
    $counter_check_last = 0;
    
    $sql_name = "select first_name from trainer";
    $result_name = mysqli_query($db_connect, $sql_name);
    
    // Check last entry
    while ($row2 = mysqli_fetch_row($result_count)) {
        $counter_check_last++;
    }
    
    echo "<ul>";  
    while ($row = mysqli_fetch_row($result)) {
        $row3 = mysqli_fetch_row($result_name);
//        if($counter + 1 != $counter_check_last) {
        if($counter % 2 == 1) {
            echo "<big style='font-size: 50px;'>$row3[0]</big>"; 
        }
        echo "<img src='$row[0]'/>"; 
        
        

        
        if($counter % 2 == 0) {
            if($counter + 1 != $counter_check_last) {
                echo " " ."<big style='font-size: 50px;'>$row3[0]</big>"; 
                echo "<big style='font-size: 256px;'>VS</big>";
            }
            else {
                echo " " ."<big style='font-size: 50px;'>$row3[0]</big>"; 
                echo "<big style='font-size: 70px;'>Mangler motstander!</big>"; 
            }
        }
        else {
            echo "<br/><br/>";
        }
        $counter++;
    }
    echo "</ul>";
//    $query = (mysqli_query($db_connect, "select image from trainer where trainer_id='$trainer'") === TRUE) {
//    echo $counter;
//    echo $counter_check_last;

  ?>
      </div>
  <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>
