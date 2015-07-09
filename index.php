<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Visual Recommender - Personalized responsive matrix form"/>
    <title>Visual Recommender - Personalized responsive matrix form</title>
    <meta name="description" content="Visit personalized responsive visual recommender in the matrix form with user-controllable interface. This visual recommender uses stackoverflow database.">
    <meta name="keywords" content="visual recommender, stackoverflow, responsive, bootstrap, matrix form">
    <meta name="author" content="Rajesh Surana">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="alternate" hreflang="x-default" href="http://www.visualrecommender.com/" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="msvalidate.01" content="F6CB8DF861831D8B738798FDACE33229" />


    <script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="javascript/bootstrap.min.js"></script>
    <link href="css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="javascript/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="javascript/recScript.js"></script>  
    <style>
    html,
    body {
       margin:0;
       padding:0;
       height:100%;
    }
    #container{
       min-height:100%;
       position:relative;
    }
    </style>
    </head>
<body>
	<div class="grid" align="center" id="container">
		<div class="row-header">
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.visualrecommender.com" style="background-color:black; color:white;">Visual Recommender</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a data-toggle="collapse" data-target=".in" href="http://www.visualrecommender.com">Home <span class="sr-only">(current)</span></a></li>
        <li><a data-toggle="collapse" data-target=".in" href="about.php">About</a></li>
		<li><a data-toggle="collapse" data-target=".in" href="contact.php">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" method="post" action="phpfiles/processrec.php" onsubmit="ajaxrequestAll('phpfiles/processrec.php'); return false;">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="<?php if(!(isset($_SESSION['query']) AND $_SESSION['query']!='')) {echo "Search";}?>"
		  id="tfq" value="<?php if(isset($_SESSION['query'])){ echo $_SESSION['query']; }  ?>">
        </div>
        <button data-toggle="collapse" data-target=".in" type="submit" class="btn btn-default">Submit</button>
		<label>
			<input type="checkbox" data-toggle="toggle" data-on="On: Answered " data-off="Off: Answered" id="anscheck" data-onstyle="default" data-width="130" checked onchange="ajaxrequestAll('phpfiles/processrec.php')">
		</label>
      </form>
	  	<form class="form-inline navbar-form navbar-right" method="post" action="login.php">
			<button type="submit" class="btn btn-default" id="signinbut">
			<?php
			if (isset($_SESSION['login_user']))
				echo "Sign out";
			else
				echo "Sign in";
		?>
			</button>
		</form>
		<p class="navbar-text navbar-right" id="signin">
		<?php
			if (isset($_SESSION['login_user']))
				echo "{$_SESSION['login_user']}";
			else
				echo "Not logged in";
		?>
		</p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
		<div class="row1">
			<div class="col-1 vertical-box">
				<!--<select class="form-control" id="attr-row1">
					<option value="Rated" selected data-toggle="tooltip" data-placement="right" title="Tooltip on right">Rated</option>
					<option value="Trusted">Trusted</option>
				</select>-->
				<button type="button" onclick="changeButtonVal(1)" id="myButton1" class="btn btn-primary" autocomplete="off" value="Trusted" data-toggle="tooltip" data-placement="bottom" html="true" data-original-title="Highly Reputed User">Trusted</button>
			</div>
			<div class="col-3" id="max-rec1"><div id="background">Preview 1</div></div>
			<div class="col-3" id="max-rec2"><div id="background">Preview 2</div></div>
		</div>
		<div class="row1">
			<div class="col-1 vertical-box">
				<!--<select class="form-control" id="attr-row2">
					<option value="Discussed">Popular</option>
					<option value="Verbatim" selected>Verbatim</option>
				</select>-->
				<button type="button" onclick="changeButtonVal(2)" id="myButton2" class="btn btn-success" autocomplete="off" value="Verbatim" data-toggle="tooltip" data-placement="bottom" html="true" data-original-title="Maximal String Match">Verbatim</button>
			</div>
			<div class="col-3" id="max-rec3" ><div id="background">Preview 3</div></div>
			<div class="col-3" id="max-rec4" ><div id="background">Preview 4</div></div>
		</div>
		<div class="row1">
			<div class="caption-bottom">Public</div>
			<div class="caption-bottom">Personal</div>
		</div>
		<div class="row"><div style="font-style: italic;">* <u>Darker</u> the <b>SQUARE</b> color higher the result recommended</div></div>
        </div><!-- /.grid -->
        <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Visual<span>Recommender</span></h3>

				<p class="footer-links">
					<a href="/">Home</a>
					·
					<a href="about.php">About</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Visual Recommender &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Arizona State University</span> Tempe, AZ</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 480 2898922</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">rsurana@asu.edu</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Disclaimer</span>
					Database for this recommender model has been extracted by using Stackoverflow API and all the sensitive information has been masked.
				</p>

				<!--<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>-->

			</div>

		</footer>
        <!-- Start of StatCounter Code for Default Guide -->
        <script type="text/javascript">
        var sc_project=10520019; 
        var sc_invisible=1; 
        var sc_security="cf9eb2e7"; 
        var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");
        document.write("<sc"+"ript type='text/javascript' src='" +
        scJsHost+
        "statcounter.com/counter/counter.js'></"+"script>");
        </script>
        <noscript><div class="statcounter"><a title="shopify site
        analytics" href="http://statcounter.com/shopify/"
        target="_blank"><img class="statcounter"
        src="http://c.statcounter.com/10520019/0/cf9eb2e7/1/"
        alt="shopify site analytics"></a></div></noscript>
        <!-- End of StatCounter Code for Default Guide -->
</body>
</html>
