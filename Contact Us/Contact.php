<!DOCTYPE html>
<html>

<head>


    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sea Side Park Hotel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='contact.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <script src="contact.js" defer></script>




</head>

<body>
    <!-- navigation bar -->

    <?php require("../components/navBar.php");  ?>



    <div class="container">
        <p>Contact Us</p>

        <div class="login">
            <input type="text" class="input" placeholder="Your Name">
            <input type="text" class="input" placeholder="Your Email Address">
        </div>

        <div class="subject">
            <input type="text" class="input" placeholder="subject">
        </div>

        <div class="msg">


        </div>

        <div class="btn">Send Messsage</div>
    </div>

    <?php require("../components/footer.php");  ?>
    
</body>

</html>