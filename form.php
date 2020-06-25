<?php include 'cbd.php';?>
<?php include 'navbar.php';?>



 <?php
 session_start();?>
 






<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values
$fnameErr = $emailErr =  $passwordErr = $confirmErr = "";
$fname = $email =  $password = $confirm  = "";

// The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validates email
    if (empty($_POST["email"])) {
        $emailErr = "You Forgot to Enter Your Email!";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "You Entered An Invalid Email Format"; 
        }
    }
    //Validates Username
    if (empty($_POST["fname"])) {
        $fnameErr = "You Forgot to Enter Your Username!";
    } else {
        $fname = test_input($_POST["fname"]);
        }
    //Validates password & confirm passwords.
    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirm"])) {
        $password = test_input($_POST["password"]);
        $confirm = test_input($_POST["confirm"]);
        if (strlen($_POST["password"]) <= 8) {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $confirmErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }
    
}
/*Each $_POST variable with be checked by the function*/
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 
 Password: <input type="password" name="password" value="<?php echo $password;?>" 
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" requi> 
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  confirmpasword: <input type="password" id="confirm" name="confirm" maxlength="25" class="form-control" required>
  <span class="error">* <?php echo $confirmErr;?></span>
  <br><br>
                                
  
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>

<?php
include('cbd.php');









// define variables and set to empty values
$fnameErr = $emailErr =  $passwordErr = $confirmErr = "";
$fname = $email =  $password = $confirm  = "";

// The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $rs=mysqli_query($con,"select * from user where login='$fname'");
    if (mysqli_num_rows($rs)>0)
    {
        echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
        exit;
    }
    $query="insert into user(name,email,password,confirm) values('$fname','$email','$password','$confirm')";
    $rs=mysqli_query($con,$query);



    //Validates email
    if (empty($_POST["email"])) {
        $emailErr = "You Forgot to Enter Your Email!";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "You Entered An Invalid Email Format"; 
        }
    }
    //Validates Username
    if (empty($_POST["fname"])) {
        $fnameErr = "You Forgot to Enter Your Username!";
    } else {
        $fname = test_input($_POST["fname"]);
        }
    //Validates password & confirm passwords.
    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirm"])) {
        $password = test_input($_POST["password"]);
        $confirm = test_input($_POST["confirm"]);
        if (strlen($_POST["password"]) <= 8) {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $confirmErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }
    
} //include 'cbd.php';
/*Each $_POST variable with be checked by the function*/
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>
 
