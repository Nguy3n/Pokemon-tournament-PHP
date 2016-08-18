<?php
$db=new mysqli("localhost","root","","pokemon_tournament");
if($db->connect_error)
{
    die("* Kunne ikke koble til databasen!".$db->connect_error);
}
?>