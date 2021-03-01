<?php
$host = "localhost";
$username = "mateusz";
$password="haslo";
$dbname="warsztaty";

$polaczenie = @new Mysqli($host,$username,$password,$dbname);

if(mysqli_connect_errno()!=0){
    echo("blad".mysqli_connect_error());
}
else{
    echo("dobrze");
}
?>