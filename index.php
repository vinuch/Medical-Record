<?php
require 'db_query/InsertQuery.php';

$fullnameErr = ""; $genderErr = ""; $emailErr = "";

function sanitizeInputs($value) {
	$value = trim($value);
	$value = htmlentities($value);
	$value = htmlspecialchars($value);
	$value = stripslashes($value);

	return $value;
}

if (isset($_POST['btnSubmit'])) {
	$fullname = sanitizeInputs($_POST['fullname']);
	$gender = sanitizeInputs($_POST['gender']);
	$email = sanitizeInputs($_POST['email']);

	if (empty($fullname)):
		$fullnameErr = "Fullname is either empty";
	elseif (str_word_count($fullname) < 2):
		$fullnameErr = "Fullname should contain firstname and lastname.";
	endif;

	if (empty($gender)):
		$genderErr = "Gender is required.";
	endif;

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
		$emailErr = "Invalid email address.";
	endif;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Home</title>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="/">Electronic Medical Records </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="OurCompany.php">Our Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FAQ.php">FAQ</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="SignUpForm.php" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="Login.php" class="nav-link">Login</a>
                </li>
            </ul>   
}
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-text">
                        <h1 class="banner-heading">The universal Medical data bank</h1>
                        <p class="banner-content">The diagnosis is made on the basis of the presence or absence 
                            of specific criteria that have been found to be consistent with those who 
                            experience JPFS (see Differentials). The chronic nature of fibromyalgia in 
                            the pediatric population suggests 
                            consequences for psychosocial development and implies a more difficult transition 
                            from childhood to adulthood.
                        </p>
                        <a href="#" class="btn-black">How it works</a>
                        <a href="registerHospital.php" class="btn-black">Get started</a>
                    </div>
                    
                    
                    </div>
                    <div class="col-md-12 text-center pt-4">
                        <span><a href="#">how it works</a></span><br>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                
            </div>
        </div>

    </section>
    <section class="more-info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h1 class="heading">Register at your nearest Med data supported health center</h1>
                <p class="content">visit any hospital, clinic, or pharmacy that is close to you that supports our services and they will direct you on how to register, you can find a list of clinics that support us <a href="#" class="text-primary">here</a></p>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                   <img src="img/pharmacy.png" alt="" width="80%"> 
                </div>
                
            </div>
        </div>

        <div class="row">
        <div class="col-md-6">
                <div class="img-box">
                   <img src="img/salon.png" alt="" width="80%"> 
                </div>
                
            </div>
            <div class="col-md-6 pt-5" style="order: 1;">
                <h1 class="heading">Get your Med data unique pin</h1>
                <p class="content">visit any hospital, clinic, or pharmacy that is close to you that supports our services and they will direct you on how to register, you can find a list of clinics that support us <a href="#" class="text-primary">here</a></p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 pt-5">
                <h1 class="heading">Register at your nearest Med data supported health center</h1>
                <p class="content">visit any hospital, clinic, or pharmacy that is close to you that supports our services and they will direct you on how to register, you can find a list of clinics that support us <a href="#" class="text-primary">here</a></p>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                   <img src="img/pharmacy.png" alt="" width="80%"> 
                </div>
                
            </div>
        </div>
    </div>
    </section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</body>

</html>
