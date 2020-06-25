
 <?php ob_start(); ?>
 
<?php
session_start();?>

<?php include 'cbd.php';?>
<?php
//session_start();
$username = "";
$email = "";
$errors = [];

$con = new mysqli('localhost', 'root', '', 'the_perfect_cup1');
//$con = mysqli_connect($host,$user,$pw,$db);
// SIGN UP USER
if (isset($_POST['submit'])) {
    //if (empty($_POST['username'])) {
       // $errors['username'] = 'username required';
    //}
    //if (empty($_POST['email'])) {
       // $errors['email'] = 'Email required';
   // }
    //if (empty($_POST['password'])) {
       // $errors['password'] = 'Password required';
   //// }



   
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['confirm']) {
        $errors['confirm'] = 'The two passwords do not match';
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(500)); // generate unique token
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
       // alert('Email already exists');
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO user SET username=?, email=?, token=?, password=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('ssss', $username, $email, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $id = $stmt->insert_id;
            $stmt->close();

            //TO DO: send verification email to user
            //sendVerificationEmail($email, $token);

            $_SESSION['id'] = $id;///
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            header('location: index.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
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


    

<div class="container">
<p><span class="error">* required field</span></p>
   <form role="form" action="register.php" method="post">
    
                   
                   
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Your Name</label>
                                <input type="text" id="username" name="username" maxlength="25" class="form-control" value="<?php echo $username; ?>" required>
                                
                            </div>
                            
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control" required>
                               
                            </div>

                             <div class="clearfix"></div>
                             
                            <div class="form-group col-lg-4">
                                <label>password</label>
                                <input type="password" id="password" name="password" maxlength="25" class="form-control"  required>
                               
                            </div>
                           
                           <div class="form-group col-lg-4">
                                <label>confirm</label>
                                <input type="password" id="confirm" name="confirm" maxlength="25" class="form-control"  required>
                            
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <button type="submit" name="submit" id="contact"  value="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div> 
                       
                    </form>
                    <div class="form-group col-lg-12">
                   
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                        <a href = "register.php" id="register"  class="btn btn-default"> Not a member ? register here </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>    <!-- /.container -->






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

</html