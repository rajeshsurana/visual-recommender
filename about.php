<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="title" content="About">
      <title>About</title>
	  <meta name="description" content="Description of visualrecommender">
      <meta name="keywords" content="visual recommeder, stackoverflow, responsive, bootstrap">
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
      <style>
        @media(min-width:778px) {
            .about-image {
                width : 50%;
            }
        }
      </style>

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
  
  </head>
<body>
	<div class="grid" align="center">
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
      <a class="navbar-brand" href="http://www.visualrecommender.com" style="background-color:black; color:white;">Stackoverflow Recommender</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://www.visualrecommender.com">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
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
            <div class="col-xs-12">
                <h2><strong>Visual Recommender</strong></h2>
            </div>
        </div> 
        <div class="row">
            <div class="col-xs-12 text-left">
                <p>Online Visual Recommender is a first of its kind - personalized responsive visual recommender in the matrix form with user-controllable interface. It enables users to compare recommended results for different categories as well as public interest vs personal affinity for topics.</p>
                <p>In this project, we present first of its kind - personalized responsive visual recommender in the matrix form with user-controllable interface. Major research in recommendation system has been focused on algorithm logic providing more accurate and personalized recommendations. Several studies have established that user satisfaction can be dramatically increased with the help of interactive visualization endowing capability to change the system content catering individual’s need. Our approach enables users to compare recommended results for different categories as well as public interest vs personal affinity for topics. We have also integrated filter in our model to customize and remove unwanted results contributing towards user controllability. As a part of personalized recommender we also provided hide feature to store preferences of the users. To induce user’s trust in our system we tried to come up reasonably transparent system logic. This recommender model tries to reach maximum audiences with its responsiveness thereby adding value towards usefulness of an associated website. To access complete report on this model <a href="document/visualrecommender.pdf" target="_blank">click here</a>.</p>
                <p><a href="phpfiles/userid.php" target="_blank">Click here</a> to get <b>User ID</b> and <b>Password</b> to login. These are the real User IDs from stackoverflow. We have created personal preferences for each of them based on questions asked and answered by that user. After logging in, you will notice that results on right columns are weighted on personal preferences of that user.</p>
            </div>
        </div> 
        <div class="row">
            <div class="col-xs-12 text-left">
                <p>Let's look at visual elements of the the model.</p>
                <ol>
                
                    <h3><li>Visualization Grid</li></h3>
                    <p>Here is a recommender at first look-</p>
                    <div class="about-image"><a href="images/home.png" target="_blank"><img src="images/home.png" class="img-responsive img-thumbnail" alt="Responsive image"/></a></div>
                    <div>&nbsp;</div>
                    <p>We divided our recommendation space into grid of four boxes. First row corresponds to attributes ‘Voted’ and ‘Rated’. Second row is for ‘Popular’ and ‘Verbatim’. By default, we set our left side buttons to ‘Trusted’ and ‘Popular’ attributes. You just need to click on the buttons to change their type. We have also provided tooltips for each button to explain user the meaning of each attributes. Further, our grid is divided into two columns viz., Public and Personal. If user has not logged in, then we replicate the result of Public column into Personal column. Swearingen have already emphasized on the importance of visual aspect of recommender system. We followed their advice while designing our prototype.</p>
                    
                    <h3><li>Recommendation box</li></h3>
                    <p>Here is the screenshot of our model when user searched for ‘how to define array without specifying length’ –</p>
                    <div class="about-image"><a href="images/search.png" target="_blank"><img src="images/search.png" class="img-responsive img-thumbnail" alt="Responsive image"/></a></div>
                    <div>&nbsp;</div>
                    <p>To maintain consistent coloring we had blue color for complete first row and green color for second one. This consistency in color helps user understand that each box in a row has recommendation result with respect to one attribute. Whereas different colors in each column suggest that results belong to different attributes.</p>
                    
                    <h3><li>Heat Map</li></h3>
                    <p>Traditional ranking system would have been ineffective in our case if user wanted to take advantage of grid system to compare results simultaneously across different domains. That’s why we came up with heat map. Each question is preceded by a box symbolizing recommendation score in that box. Darker the box higher the result recommended. Two or more squares with same shade of color depicts questions with comparable or similar recommendation score. We used SVG for building squares.</p>
                    
                    <h3><li>Hide Symbol (Eye with red slash)</li></h3>
                    <p>In order to hide the question which user does not want to see in future, we came up with this hide symbol which succinctly does portray desired meaning. It is the part of implementing personalized recommendation system with online feedback and update. We used SVG for building hide symbol.</p>    

                    <h3><li>Filter Button: Answered</li></h3>
                    <p>If user is merely interested in answer to the question then she can filter out those questions which do not have any answer yet. Our toggle button right after submit button instantly updates the recommended results according to the current value.</p>                     
                    <h3><li>Navbar</li></h3>
                    <p>Bootstrap has collapsible navbar which can detects screen size and collapses if browser width goes below 768px. It means small screen devices will have collapsed navbar where large screen devices will have full-fledged navbar. In the collapsed mode user has to click on toggle button to expand and see all the navbar menus and buttons. We included search and other navigation buttons in the navbar so that 90% of the space in any screen size will be occupied by recommendation grid. This was one of the tricky decision in order to maximize available space usage for recommendation results.</p>   

                    <h3><li>Mobile View</li></h3>
                    <p>Below is a screenshot of our recommender when opened in iPhone 6 –</p>
                    <div class="about-image"><a href="images/mobile.png" target="_blank"><img src="images/mobile.png" class="img-responsive img-thumbnail" alt="Responsive image"/></a></div>
                    <div>&nbsp;</div>
                    <p>You can notice that first row box has consumed most of the width of the screen. This happens when user click on the box in mobile. Same effect we get in big screen devices on hovering the particular box. Again the reasoning behind it was to maximize space usage and focus on current box by showing maximum content without scrolling sideways. Here, we implemented Sneiderman’s details on demand strategy - showing details only when required.</p>                    
                <ol>
            </div>
        </div>
    </div><!-- /container -->
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