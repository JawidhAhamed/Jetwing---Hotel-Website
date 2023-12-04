<!DOCTYPE html>
<html> <head>


<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Sea Side Park Hotel</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
<script src="reservations.js" defer></script>




</head>
<body>
<!-- navigation bar -->
<?php   require("../components/navBar.php");  ?>

 <div class="bg-img">
	<div class="div">
		<div class="container">
			<h1 class="label">User Login</h1>
			<form class="login_form" method="post" name="form" >
				<div class="font">Email or Phone</div> 
				<input type="text" name="email">
				<div id="email_error">Please fill up your Email or Phone
				</div>
				<div class="font font2">Password</div> 
				<input type="Password" name="password">
				<div id="Pass_error">Please fill up your Email or Phone
				</div>
				<button class="submit">Login</button>
			</form>
		</div>
	</div>
</div>

 
<div class="footer">
    <div class="inner-footer">

       <div class="footer-items">
           <h1>Sea Side Park Hotel</h1>
           <p>
               
               Sea Side Park Hotel sits poised at the edge of the slow meandering PegeonIsland, 
                a sentinel of luxury in a stunning landscape of calming sunrises and psychedelic sunsets, 
               caressed by the breezes that waft across the still waters of the river, serenaded by birdcall and the
               swishing of oars, bathed in a glow that only paradise can offer you. This is ‘Sea Side Park Hotel’

              There’s never a dull moment at Sea Side Park Hotel !
              Welcome to Sea Side Park Hotel, a small luxury hotel on the South Coast of Sri Lanka!
           </p>
       </div>

       <?php   require("./components/footer.php");  ?>
</div>
</body>
</html>

