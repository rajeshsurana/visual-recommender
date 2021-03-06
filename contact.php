<?php
session_start();
?>
<?php
    if (isset($_POST["submit"])) {

 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if (isset($human) && ($human !== 5)) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!isset($errName) && !isset($errEmail) && !isset($errMessage) && !isset($errHuman) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = "From: noreply@visualrecommender.com\n"; 
    $from .= "Reply-To: $email";
    $to = "mr.rajeshsurana@gmail.com"; 
    $subject = "Stackoverflow Visual Recommender: $name";
    
    $body = "From: $name\n\nE-Mail: $email\n\nMessage:\n\n$message";
        
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        unset($_POST['name']);
        unset($_POST['email']);
        unset($_POST['message']);
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
}
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="About">
    <title>Contact</title>
    <meta name="description" content="I would like to hear about your thoughts. Please send your valuable suggestions through contact form.">
    <meta name="keywords" content="contact, visual recommender, stackoverflow, responsive, bootstrap">
    <meta name="author" content="Rajesh Surana">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!-- JAVASCRIPT to clear search text when the field is clicked -->
    <!--<script type="text/javascript" src="javascript/recScript.js" async></script>-->
    <script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
    <!-- <script type="text/javascript" src="javascript/login.js" async></script>-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="javascript/bootstrap.min.js"></script>
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
        <li><a href="http://www.visualrecommender.com">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
		<li class="active"><a href="contact.php">Contact</a></li>
      </ul>
		
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
		<?php
		//Display error message for invalid user id or password
		if (isset($_SESSION['Error_Message'])){
			echo '<div style = "left:0; right:0; color:white; font-size:140%">'.$_SESSION['Error_Message'].'</div>';
			unset($_SESSION['Error_Message']);
		}
			?>
	<div class="container">
        <div class="row">
            <h2><strong>Contact<strong></h2>
            <p>Your feedback is valuable to us.</p>
        </div>
        <form class="form-horizontal" role="form" method="post" action="contact.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" required>
                    <?php if(isset($errName)) echo "<p class='text-danger'>$errName</p>";?>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
                    <?php if(isset($errEmail)) echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message"><?php if(isset($_POST['message'])) echo htmlspecialchars($_POST['message']);?></textarea>
                    <?php if(isset($errMessage)) echo "<p class='text-danger'>$errMessage</p>";?>
                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                    <?php if(isset($errHuman)) echo "<p class='text-danger'>$errHuman</p>";?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <?php if(isset($result)) echo $result; ?>    
                </div>
            </div>
        </form> 
    </div><!-- /container -->
    </div>
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