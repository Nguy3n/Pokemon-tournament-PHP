<?php
session_start();
$error='';
if(isset($_POST['submit'])) {
    if(empty($_POST['brukernavn']) || empty($_POST['passord'])) {
        $error = "Brukernavn eller passord er tomt!";
    }
    else {
        $bruker=$_POST['brukernavn'];
        $salt = "fasofj421598";
        $passord = $_POST['passord'].$salt;
        $passord=md5($passord);
        $db_connect = mysqli_connect("localhost", "root", "", "pokemon_tournament");
        
//        include 'includes/db_connect.php';
        
        $query = mysqli_query($db_connect, "select * from admin where password='$passord' AND username='$bruker'");
        $rows = mysqli_num_rows($query);
        
        if ($rows == 1) {
            $_SESSION['login']=$bruker;
            header("location: innlogget.php");
        } 
        else {
            $error = "Brukernavn eller passord stemmer ikke!";
        }
        mysqli_close($db_connect);
    }
}

?>