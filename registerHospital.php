<?php 
require 'db_query/InsertQuery.php';

$hospitalNameErr = ""; $hospitalAddressErr = ""; $cityErr = ""; $stateErr = ""; $hospitalPhoneErr = ""; 

function sanitizeInputs($value) {
	$value = trim($value);
	$value = htmlentities($value);
	$value = htmlspecialchars($value);
	$value = stripslashes($value);

	return $value;
}

if (isset($_POST['btnSubmit'])) {
	$hospitalName = sanitizeInputs($_POST['hospitalName']);
	$hospitalAddress = sanitizeInputs($_POST['hospitalAddress']);
    $city = sanitizeInputs($_POST['city']);
    $state = sanitizeInputs($_POST['state']);
    $hospitalPhone = sanitizeInputs($_POST['hospitalPhone']);

	if (empty($hospitalName)){
        $fullnameErr = "Hospital Name is either empty";
    }
		

	if (empty($gender)):
		$genderErr = "Gender is required.";
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
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title>Login</title>
</head>

<body>
    <?php
	if (!isset($_POST['btnSubmit']) or (isset($_POST['btnSubmit']) and (!empty($hospitalNameErr) or !empty($hospitalAddressErr) or !empty($cityErr) or !empty($stateErr) or !empty($hospitalPhoneErr)))) {
	?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
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

        </div>
    </nav>

    <section class="body">
        <div class="container">
            <div class="row">



                </div>
                <div class="col-md-12" align="center">
                    <div class="form-box">
                        <div class="form-heading">
                            <h2 class="text-center">Register Hospital</h2>
                        </div>
                        <div class="">
                            <form method="POST" action="" class="text-left">
                             
                                <div>
                                    <label><b>Hospital Name :</b></label><br>
                                    <input type="text" class="form-data" name="hospitalName" required value="<?=isset($hospitalName) ? $hospitalName : ''?>">
                                </div>
                                <div>
                                    <label><b>Hospital Address </b></label><br>
                                    <input type="text" class="form-data" name="hospitalAddress" required value="<?=isset($hospitalAddress) ? $hospitalAddress : ''?>">
                                </div>
                                <div>
                                    <label><b>City :</b></label><br>
                                    <input type="text" class="form-data" name="city" required value="<?=isset($city) ? $city : ''?>">
                                </div>
                                <div>
                                    <label><b>state/province :</b></label><br>
                                    <input type="text" class="form-data" name="state" required value="<?=isset($state) ? $state : ''?>">
                                </div>
                                <div>
                                    <label><b>Hospital phone number :</b></label><br>
                                    <input type="number" class="form-data" name="hospitalPhone" required value="<?=isset($hospitalPhone) ? $hospitalPhone : ''?>">
                                </div>

                                <div>
                                    
                                    <input type="checkbox" required> <label>I agree to the<a href="#" style="color:blue"> Terms of Use </a> and <a href="#" style="color:blue"> Privacy Policy</a>.</label>
                                </div>
                                <div align="center" class="mt-3 mb-3">
                                    <button type="submit" class=" btn-black"   name="btnSubmit">Submit</button>
                                </div>
                            </form>
                            <div>Already have an account? Click <a href="Login.php" style="color:blue">here</a> to login </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php 
    }
    if ( (isset($_POST['btnSubmit']) and (empty($hospitalNameErr) or empty($hospitalAddressErr) or empty($cityErr) or empty($stateErr) or empty($hospitalPhoneErr)))) {
        $insertQuery = new InsertQuery;
        $response = $insertQuery->insertHospital($hospitalName, $hospitalAddress, $city, $state, $hospitalPhone);
        if (!$response['status']) {
            echo "We had a technical issue, please go back try again <br>";
            echo $response['message'];
        }
    }
    
    ?>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</body>

</html>
