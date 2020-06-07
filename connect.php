<?php


//pour ouvrire une nouvelle connexion au serveur MySQL.
$servername = "localhost";
$username = "root";//root
$password = "";//""
$db = "the_perfect_cup1";


//$mysqli = new mysqli($servername,$username,$password,$db);
$connect = mysqli_connect($servername,$username,$password,$db);
                                                                                    


// Check connection 
// renvoie le code d'erreur de la dernière erreur de connexion, le cas échéant.



if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
    echo "connexion etablie" ;
}




/*//PDO
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>*/