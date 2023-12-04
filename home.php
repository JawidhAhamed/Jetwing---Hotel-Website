<!DOCTYPE html>
<html>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sea Side Park Hotel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='home.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <script src="home.js" defer></script>




</head>

<body>
    <!-- navigation bar -->
    <?php   require("./components/navBar.php");  ?>

    <div class="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="bg.jpg" />
                    <div class="carousel-caption" style="font-family: BigNoodleTitling;">
                        <div class="carousel-caption"
                            style="font-family: BigNoodleTitling; border: black; color:wheat;">
                            <h1>“ Nothing is impossible ” </h1>
                            <h5>Jawidh ahamed</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->

    <div class="footer">
        <div class="inner-footer">

            <div class="footer-items">
                <h1>Sea Side Park Hotel</h1>
                <p>

                    Jetwing sits poised at the edge of the slow meandering PegeonIsland,
                    a sentinel of luxury in a stunning landscape of calming sunrises and psychedelic sunsets,
                    caressed by the breezes that waft across the still waters of the river, serenaded by birdcall and
                    the
                    swishing of oars, bathed in a glow that only paradise can offer you. This is ‘Sea Side Park Hotel’

                    There’s never a dull moment at Sea Side Park Hotel !
                    Welcome to Sea Side Park Hotel, a small luxury hotel on the South Coast of Sri Lanka!
                </p>
            </div>

            <div class="footer-items">
                <h2>Opening Hours</h2>
                <div class="border"></div>
                <ul>
                    <li>Mon: Open 24 hours</li>
                    <li>Tue: Open 24 hours</li>
                    <li>Wed: Open 24 hours</li>
                    <li>Thur: Open 24 hours</li>
                    <li>Fri: Open 24 hours</li>
                    <li>Sat: Open 24 hours</li>
                </ul>


            </div>


            <div class="footer-items">
                <div class="border"></div>
                <h2>Address</h2>
                <ul>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        NO 101/17 ,<br> ALLES GARDEN ROAD<br>
                        MATARA,<br> SRI LANKA.
                    </li>


                </ul>

            </div>


            <?php   require("./components/footer.php");  ?>

</body>

</html>