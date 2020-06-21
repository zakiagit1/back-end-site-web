<?php include 'cbd.php'?>
 <?php ob_start(); ?>
 
<?php
session_start();?>




















 <?php
require('cbd.php');//la base de données
// If the values are posted, insert them into the database.
if (isset($_POST['fname']) && isset($_POST['password'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $slquery = "SELECT 1 FROM user WHERE email = '$email'";
    $selectresult = mysql_query($slquery);
    if(mysql_num_rows($selectresult)>0)
    {
        die('email already exists');
    } elseif($password != $cpassword){// aucun reaction 
        $msg = "passwords doesn't match";
   }

    $query = "INSERT INTO `user` (name,email, password,confirm, ) VALUES ('$fname','$email', '$password', '$confirm' )";
    $result = mysql_query($query);
    if($result){
        $msg = "User Created Successfully.";
    }
   }
?>












<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php include 'navbar.php';?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Welcom </h2>
                    <hr>
                    <h2 class="intro-text text-center">Register
                        <strong>The Perfect Cup </strong>
                    </h2>
                    <hr>
                </div>
             
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                   
                    <div id="add_err2"></div>


                    <?php
        if(isset($msg) & !empty($msg)){
        echo $msg;
    }
    ?>
    <?php
    if(isset($errormes))
    {
        echo $errormes;
    }
    ?>

                    <form role="form" action="register.php"  method="post">
                    <div class="alert alert-error"> <?= $_SESSION['message'] ?></div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Your Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control" required>
                            </div>
                            
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control" required>
                            </div>

                             <div class="clearfix"></div>
                             
                            <div class="form-group col-lg-4">
                                <label>password</label>
                                <input type="password" id="password" name="password" maxlength="25" class="form-control" required>
                            </div>
                           
                            <div class="form-group col-lg-4">
                                <label>confirm</label>
                                <input type="password" id="confirm" name="confirm" maxlength="25" class="form-control" required>
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <button type="submit" name="submit" id="contact"  value="register" class="btn btn-default">Submit</button>
                            </div>
                        </div> 
                       
                    </form>
                    <div class="form-group col-lg-12">
                    <p>Already have an account? <a href="login.php">Login here</a>.</p>
                        <a href = "register.php" id="register" class="btn btn-default"> Not a member ? register here </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2019</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
