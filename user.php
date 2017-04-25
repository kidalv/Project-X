<!DOCTYPE html>
<html lang="en">
<head>
	 <?php   require("config.php");    ?>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kinamanis">
    <title>User</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">HOME</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="login.html">Sign in</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="post.html">UZDEVUMS</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Header-->
<header class="intro-header" style="background-image: url('img/home-head.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>VladLOuH</h1>
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>    
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h3>User Information:</h3>
                <hr class="style14">
        <div>
	        <h>Name: Vladislavs</h><br>
	        <h>Surname: Kirvels</h><br>
	        <h>Email: kisats.vlad@gmail.com</h><br>
	        <h>Date created: 03.06.1998</h>
	          <ul class="pager">
	          	<li class="next">
				 	<button id="some_id">Edit info</button>
				</li>
            </ul>
            <script type="text/javascript">
			    var theButton = document.getElementById('some_id');
			    theButton.onclick = function() { 
			        document.getElementById('change-form').className= 'unhidden';   
   				 }

			</script>
            <form id="change-form" class="hidden" >
				<div class="form-style-1">
				    <li><label>Full Name <span class="required"></span></label><input type="text" name="field1" class="field-divided" placeholder="First"  required onkeypress="javascript: if(event.charCode == 32) return false;"/><input type="text" name="field2" class="field-divided" placeholder="Last" required onkeypress="javascript: if(event.charCode == 32) return false;"/></li>
				    <li>
				        <label>Email <span class="required"></span></label>
				        <input type="email" name="field3" class="field-long"  required onkeypress="javascript: if(event.charCode == 32) return false;" />
				    </li>
				    <li><label>New password<span class="required"></span></label>
				    <input type="text" name="field3" class="field-long" required onkeypress="javascript: if(event.charCode == 32) return false;"/>
					</li>
					<ul class="pager">
	          			<li class="next">
				 			<input type="submit" value="Submit" />
						</li>
            		</ul>    
				</div>
			</form>
                <hr class="style14">
                <h3>Last Posts:</h3>
                <h><a href="#">Kakoj igorj krutoj</a></h>
                <hr>
                <h><a href="#">IGOR fan club</a></h>
                <hr>
                <h><a href="#">Airešana - mana dzive</a></h>
                <hr class="style14">
           <h3>Last Comments:</h3>
           		<h><a href="#">Petrovs mil skatities uz maziem berniem un kad vinš...</a></h>
           		<hr>
           		<h><a href="#">Es vienreiz paliku ar Igoru viens klasē lidz piecie...</a></h>
           		<hr>
           		<h><a href="#">Farsaža 8 bez šaubam labakais films kuru es redzeju...</a></h>


        </div>
    </div>
</div>

<hr>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; KISATS 2k17</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="vendor/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/blog.js"></script>

</body>
</html>