<?php include 'navbar.php';?>
  
   <?php ob_start(); ?>

   <?php include 'cbd.php';?>


<?php
//include 'cbd.php';
session_start();
$message="";
if(count($_POST)>0) {
$con = mysqli_connect($host,$user,$pw,$db);
$result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["username"] = $row['username'];
} else {
$message = "Invalid Username or Password!";
}
}
//if(isset($_SESSION["id"])) {
header("Location: blog.php");
//}
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

    <script src="https://kit.fontawesome.com/5e67adc73a.js" crossorigin="anonymous"></script>
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

<link rel="stylesheet" href="css/email.css" type="text/css" media="all">
<style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>
</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
 
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>The Perfect Cup</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:info@theperfectcup.com">info@theperfectcup.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">login
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2">  </div>
              
    <!-- /.container -->
   
    <div class="page-header">
   
    </div>
     <form id="form" role="form"   name="form"  action="login.php"   method="POST">
    
     
                        <!-- <div class="row"> -->
                        <div class="form-group col-lg-4">
                                <label>Your User Name</label>
                                <input type="text" id="username" name="username" maxlength="25" class="form-control" placeholder="yourName"  required>
                            </div>
                            
                            <div class="clearfix"></div>

                            <div class="form-group col-lg-6">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="20" placeholder="password" required >
                                
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login"  name="login"  value="connexion" class="btn btn-default" required >login</button>
                                
                            </div>
                            <p>New User <a href="register.php">Register Here</a></p>

    
                    </form>
              </div>
            </div>
        </div>

    </div>




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
<script src="js/form.js"></script>
</body>

</html>










