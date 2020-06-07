<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

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
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                     <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Take the edge off with a fresh hot cup of coffee make with Irish whiskey and Irish cream.</p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                     <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of the day.</p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!--container -->
    <!--Modal-1-->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!--Modal Content-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss-="modal">&times;</button>
				<h4 class="modal-title">Coconut Oil Coffee</h4>
			</div>
			<div class="nodal-body">
				<p>Sample Text</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
   
    <!--Modal-2-->
	<div id="myModal2" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!--Modal Content-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss-="modal">&times;</button>
				<h4 class="modal-title">Irish Coffee</h4>
			</div>
			<div class="nodal-body">
				<p>Sample Text</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
   
    <!--Modal-3-->
	<div id="myModal3" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!--Modal Content-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss-="modal">&times;</button>
				<h4 class="modal-title">Frozen Caramel Latte</h4>
			</div>
			<div class="nodal-body">
				<p>Sample Text</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
