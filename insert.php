<?php
   

$host="localhost";
$user="root";
$pw="";
$ndb="the_perfect_cup1";

$con=mysqli_connect($host,$user,$pw,$ndb,3306);
 if($con){
  echo"connected";
 }else{
  echo"no connected";}


if(isset($_POST["click"])){
	//$con = connect_to_mysqli($host, $user, $pw, $ndb);
	$name = $_POST["fname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm = $_POST["confirm"];	 
	$sql = "INSERT INTO contact (name, email, password, confirm) VALUES ('$name', '$email', '$password', '$confirm')";
	if (mysqli_query($con, $sql)) {
		  //echo "<h2><font color=blue>New record added to database.</font></h2>";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	mysqli_close($con);

	header('location:index.php');
}
if($num_rows!=0)
        {echo 'Cet email est deja inscrit !';}
?>