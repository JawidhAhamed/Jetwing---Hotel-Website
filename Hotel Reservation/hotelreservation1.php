<!DOCTYPE html>
<html>
<head>
   
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sea Side South Park</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='hotelreservation1.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <script src="hotelreservation1.js" defer></script>


</head>

<body>
    <!-- navigation bar -->
    
    <?php   require("../components/navBar.php");  ?>


     <!-- image -->


<div class="bg-img">
  
    
    <form action="hotelreservation.php" method="POST" class="container">
    <h1>Hotel Reservation</h1><br>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter in a valid email address">

    <label for="phone"><b>Phone Number</b></label>
    <input type="tel" placeholder="Enter Phone Number" name="phone" required pattern="[0-9]{4} [0-9]{3} [0-9]{3}" title="Please enter in a phone number in this format: #### ### ###">
    
    <label for="adults"><b>Number of Adults</b></label>
    <input type="number" placeholder="Enter Number of Adults" name="adults" required>

    <label for="children"><b>Number of Children</b></label>
    <input type="number" placeholder="Enter Number of children" name="children" required>

    <label for="checkindate"><b>Check-in date</b></label>
    <input type="date" name="checkindate"
       value=""
       min="2020-05-01" max="2021-12-31" required>

    <label for="checkoutdate"><b>Check-out date</b></label>
    <input type="date" name="checkoutdate"
       value=""
       min="2020-05-01" max="2021-12-31" required>
  

    <button type="submit" class="btn1">Confirm Booking</button>
    <button type="reset" class="btn2">Cancel</button>
   
  </form>
</div>

      

     <div class="page-wrapper">
         
     </div>



                <!-- footer -->
       
     <div class="footer">
         <div class="inner-footer">

            <div class="footer-items">
                <h1>Sea Side South Park </h1>
                <p>
                    
                    Sea Side South Park sits poised at the edge of the slow meandering PegeonIsland, 
                     a sentinel of luxury in a stunning landscape of calming sunrises and psychedelic sunsets, 
                    caressed by the breezes that waft across the still waters of the river, serenaded by birdcall and the
                    swishing of oars, bathed in a glow that only paradise can offer you. This is ‘Sea Side South Park’

                   There’s never a dull moment at Sea Side South Park !
                   Welcome to Sea Side South Park, a small luxury hotel on the South Coast of Sri Lanka!
                </p>
            </div>

            <div class="footer-items">
                <h2>Opening Hours</h2>
                <div class="border"></div>
                    <ul>
                    <li>Mon:	Open 24 hours</li>
                    <li>Tue:	Open 24 hours</li>
                    <li>Wed:	Open 24 hours</li>
                    <li>Thur:	Open 24 hours</li>
                    <li>Fri:	Open 24 hours</li>
                    <li>Sat:	Open 24 hours</li>
                    </ul>
                   
                
            </div>


            <div class="footer-items">
                <div class="border"></div>
                <h2>Address</h2>
                <ul>
                    <li>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                    NO 101/17 ,<br> ALLES GARDEN ROAD<br>
                    MATARA,<br> SRI LANKA.</li>
                   
                    
                </ul>
                
           </div>
                
            
            <div class="footer-items">
                <h2>Contact Us</h2>
                <div class="border"></div>
                <ul>
                    
                    <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i></a>04123456744</li><br>
                    <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>sessideparkhotel@gmail.com</li><br>


                </ul>
                   
                    <div class="social">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>
               
         </div>

            
            
           <div class="footer-bottom">
            © 2020  Sea Side South Park. All Rights Reserved
           </div>
  </div>



