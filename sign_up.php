<!doctype html>
<html lang="en">
    
    
 <?php
 include('engine.php')   
    
    ?>   
    

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>OSUSTECH Inventor E-learning</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
     <div class="home_sign_up">
         <img src="img/form/logo.png" alt="school logo" />
        <form action="home.php" method="post" class="sign_up_form" >
           
             <p>
            <label for="luser_fname">FIRST NAME:</label>
            <input type="text" name="luser_fname" placeholder="Enter your first name" maxlenght="20" size="30" required />
            </p>
             <p>
            <label for="luser_lname">LAST NAME:</label>
            <input type="text" name="luser_lname" placeholder="Enter your last name" maxlenght="20" size="30" required />
            </p>
            <p>
            <label for="luser_password">PASSWORD:</label>
            <input type="password" name="luser_password" placeholder="Create a password" maxlenght="20" size="30" required />
            </p>
            <p>
            <label for="luser_phone">PHONE NUMBER:</label>
            <input type="number" name="luser_phone" placeholder="Enter your phone number" maxlenght="20" size="30" required />
            </p>
             <p>
            <label for="luser_name">USER NAME:</label>
            <input type="text" name="luser_name" placeholder="Create your username" maxlenght="20" size="30" required />
            </p>
            <p>
            <label for="luser_email">EMAIL:</label>
            <input type="email" name="luser_email" placeholder="Enter your email" maxlenght="20" size="30" required />
            </p>
           Select your Gender</br>
                <!-- <em>Female</em><input type="radio" name="luser_gender" value="Female" required />
                <em>Male</em><input type="radio" name="luser_gender" value="Male" required /></br> -->
                <div class="form-check">
            <input class="form-check-input" type="radio" name="luser_gender" id="exampleRadios1" value="Male" checked>
            <label class="form-check-label" for="exampleRadios1">
            Male
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="luser_gender" id="exampleRadios2" value="female">
            <label class="form-check-label" for="exampleRadios2">
            Female
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="luser_gender" id="exampleRadios3" value="other">
            <label class="form-check-label" for="exampleRadios3">
            Other
            </label>
            </div>
   
             
            <input type="submit" name="sign_up" value="sign up"/></br>
        
        </form>
            
    </div>
</body>

</html>
 
