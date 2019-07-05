<!DOCTYPE html>
<html>
<head>
	<title>Depression Detection</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="effectsfile.css">

</head>
<body>
	<header>
		<?php
		include 'headertop.html';
		?>
    </header>
    <nav>
    	<?php
         include 'NavigationPanel.php';
    	?>
    	<ul class="nav nav-tabs">
    		<li class="active"><a href="homepage.php">Home</a></li>
    		<span><ul class="nav navbar-nav navbar-right">
           <li><a href="Registerpage.php"><span><img src="sign-in.png" id="login"></span>Login</a></li>
          </ul></span>

    </nav>
<section>
    <div class="media">
  <div class="media-left">
    <img src="happy.png" style="height: 400px; width: 400px; margin-top:20px; margin-left:10px; margin-bottom:20px;">
  </div>

  <div class="media-body" style="background-color:oldlace;margin-left:20px; padding-left: 50px;">
  <div class="media-heading" style="font-size: 20px;
  error_reporting(0);font-family:sans-serif;"><h3><u>Result</u></h3>
  <p>Hey Friend! <br> Your sentiment analysis of social media posts suggests that you are happy and out of the danger of being in depression.<br>Thank you for taking this test.</p>
  </div>
</div>
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container2">
      <h2 class="text-center text-uppercase text-black">About</h2>
          <p class="lead">When you’re going through a tough time it’s normal to feel down for a while, emotions like sadness and grief help make us human. But if you’re feeling sad or miserable most of the time over a long period of time, you might have depression.<br>We provide this platform to help figure out whether you’re showing any of the warning signs of depression. This won’t give you a diagnosis but it will surely help you decide the next step.
          </p>
        </div>
    </div>
  </section>

    </section>
   <footer>
    	<div class="row">
        <div class="col-lg-4" style="background-color:midnightblue; padding-left:40px; color: white;"><h4>Hello User!
        </h4></div>
        <div class="col-lg-4" style="background-color:lightgreen; padding-left:40px; color: black;"><h4>Stay Happy</h4></div>
        <div class="col-lg-4" style="background-color:midnightblue; padding-left:40px; color: white;"><h4>Stay Healthy</h4></div>
       </div>
      </p>
    </footer>
    </body>
</html>