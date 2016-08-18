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
    include 'includes/db_connect.php';
    $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");
    
    
    echo "<h1>Kampene</h1><br/>";
    echo "<h2>Første runde</h2><br/>";
    
//    Første kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 1 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Andre kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 1 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 1 and id = 1 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 1 and id = 1";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 1 and id = 1 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    
    //    Tredje kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 2 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Fjerde kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 2 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 1 and id = 2 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 1 and id = 2";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 1 and id = 2 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    
    
    //    Femte kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 3 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Sjette kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 3 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 1 and id = 3 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 1 and id = 3";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 1 and id = 3 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    
    
    //    Syvende kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 4 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Åttende kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 4 and round = 1";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 1 and id = 4 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 1 and id = 4";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 1 and id = 4 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    
    
    echo "<h2>Semifinale</h2><br/>";
    
    
    //    Første kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 6 and round = 2";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Andre kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 6 and round = 2";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 2 and id = 6 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 2 and id = 6";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 2 and id = 6 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    
    //    Tredje kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 7 and round = 2";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Fjerde kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 7 and round = 2";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 2 and id = 7 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 2 and id = 7";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 2 and id = 7 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    
    echo "<h2>Finalerunde</h2><br/>";
    
    
    //    Første kandidat, jeg kopierer dette nedover
    echo "<ul>"; 
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer1 and id = 8 and round = 3";
    $result = mysqli_query($db_connect, $sql);
    
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    
    echo "<big style='font-size: 256px;'>VS</big>";
    
    //    Andre kandidat, jeg kopierer dette nedover
    $sql = "select image from trainer, matches where trainer.trainer_id = matches.trainer2 and id = 8 and round = 3";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        echo "<img src='".$row[0]."' alt='Image'>";
    }
    echo "</ul>";
    
    echo "<ul>";
    $tekstrunde1kamp1="Pokemon kampen ble kjempet i ";
    $sql = "select address from stage, matches where round = 3 and id = 8 and matches.stage = stage.stage_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." på dato ";
    }
    
    $sql = "select time from matches where round = 3 and id = 8";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." og vinneren ble ";
    }
    
    $sql = "select first_name, last_name from trainer, matches where round = 3 and id = 8 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $tekstrunde1kamp1 .= $row[0] ." " .$row[1] ."!";
    }
    
    
    echo $tekstrunde1kamp1;
    echo "</ul>";
    
    $vinner="Vinneren av turneringen er ";
    $sql = "select first_name, last_name from trainer, matches where round = 3 and id = 8 and matches.winner = trainer.trainer_id";
    $result = mysqli_query($db_connect, $sql);
    
    while ($row = mysqli_fetch_row($result)) {
         
        $vinner .= $row[0] ." " .$row[1] ."!";
    }
    echo $vinner;
    
//    vis alle
//    $sql = "select image from trainer order by rand() limit 8";
//    while ($row = mysqli_fetch_row($result)) {
//         
//        echo "<img src='".$row[0]."' alt='Image'>";
//    }
    
//    Kommentert kode fra oblig 2, men den kan ha nytteverdi
    
//    $sql_count = "select image from trainer order by rand()";
//    $result_count = mysqli_query($db_connect, $sql_count);
//    
//    $sql = "select image from trainer";
//    $result = mysqli_query($db_connect, $sql);
//    $counter = 0;
//    $counter_check_last = 0;
//    
//    $sql_name = "select first_name from trainer";
//    $result_name = mysqli_query($db_connect, $sql_name);
//    
//    // Check last entry
//    while ($row2 = mysqli_fetch_row($result_count)) {
//        $counter_check_last++;
//    }
//    
//    echo "<ul>";  
//    while ($row = mysqli_fetch_row($result)) {
//        $row3 = mysqli_fetch_row($result_name);
////        if($counter + 1 != $counter_check_last) {
//        if($counter % 2 == 1) {
//            echo "<big style='font-size: 50px;'>$row3[0]</big>"; 
//        }
//        echo "<img src='$row[0]'/>"; 
//        
//        
//
//        
//        if($counter % 2 == 0) {
//            if($counter + 1 != $counter_check_last) {
//                echo " " ."<big style='font-size: 50px;'>$row3[0]</big>"; 
//                echo "<big style='font-size: 256px;'>VS</big>";
//            }
//            else {
//                echo " " ."<big style='font-size: 50px;'>$row3[0]</big>"; 
//                echo "<big style='font-size: 70px;'>Mangler motstander!</big>"; 
//            }
//        }
//        else {
//            echo "<br/><br/>";
//        }
//        $counter++;
//    }
//    echo "</ul>";
    
    
//    $query = (mysqli_query($db_connect, "select image from trainer where trainer_id='$trainer'") === TRUE) {
//    echo $counter;
//    echo $counter_check_last;

  ?>
      </div>
  <footer id="foot01"></footer>
  <script src="js/script.js"></script>
</body>
</html>
