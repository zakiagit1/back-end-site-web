   <?php include 'navbar.php';?>
   <?php include 'cbd.php';?>
   <?php ob_start(); ?>
  
<?php
session_start();?>
  
<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$name_valide = "fname";
$password_valide = "password";

// on teste si nos variables sont définies
if (isset($_POST['fname']) && isset($_POST['password'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($name_valide == $_POST['fname'] && $password_valide == $_POST['password']) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['fname'] = $_POST['fname'];
		$_SESSION['password'] = $_POST['password'];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location:blog.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=register.php">';
	}

//else {
	//echo 'Les variables du formulaire ne sont pas déclarées.';
//}
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
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.4557903780455!2d-118.33880764857918!3d34.08346238050228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b8d3b1e0287d%3A0x9cc32be17df028b8!2sMelrose+Ave%2C+Beverly+Hills%2C+CA+90210%2C+USA!5e0!3m2!1sen!2sca!4v1458950947899"
                        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
      </b>. Welcome to our site.</h1>
    </div>
     <form id="form" role="form"   name="form" action="login.php"   method="POST">
    
    
                        <!-- <div class="row"> -->
                        <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control" placeholder="yourName" required>
                            </div>
                            
                            <div class="clearfix"></div>

                            <div class="form-group col-lg-6">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="20" placeholder="password" required >
                                
                            </div>
                           
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login"  name="login"  value="connexion" class="btn btn-default" required >login</button>
                                
                            </div>
                            
    
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