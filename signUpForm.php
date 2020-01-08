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
                            <h2 class="text-center">Sign Up</h2>
                        </div>
                        <div class="">
                            <form method="post" action="" class="text-left">
                                <div>
                                    <label><b>Title:</b></label>
                                    <select>
                                        <option>--Select--</option>
                                        <option>--Dr.--</option>
                                        <option>--Nurse--</option>
                                        <option>--Lab Scientist--</option>
                                    </select>
                                </div>
                                <div>
                                    <label><b>Hospital Name :</b></label><br>
                                    <input type="text" class="form-data" name="Rfirstname" required>
                                </div>
                                <div>
                                    <label><b>First Name :</b></label><br>
                                    <input type="text" class="form-data" name="Rfirstname" required>
                                </div>
                                <div>
                                    <label><b>Last Name :</b></label><br>
                                    <input type="text" class="form-data" name="Rlastname" required>
                                </div>
                                <div>
                                    <label><b>Email Address :</b></label><br>
                                    <input type="email" class="form-data" name="Remail" required>
                                </div>
                                <div>
                                    <label><b>Username :</b></label><br>
                                    <input type="text" class="form-data" name="Runame" required>
                                </div>
                                <div>
                                    <label><b>Password :</b></label><br>
                                    <input type="password" class="form-data" name="Rpword" required>
                                </div>
                                <div class=" mb-3">
                                    <label><b>Confirm Password :</b></label><br>
                                    <input type="password" class="form-data" name="">
                                </div>
                                <div>
                                    
                                    <input type="checkbox" required> <label>I agree to the<a href="#" style="color:blue"> Terms of Use </a> and <a href="#" style="color:blue"> Privacy Policy</a>.</label>
                                </div>
                                <div align="center" class="mt-3 mb-3">
                                    <button type="submit" class=" btn-black" href="" name="btnsubmit">Submit</button>
                                </div>
                            </form>
                            <div>Already have an account? Click <a href="Login.php" style="color:blue">here</a> to login </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</body>

</html>
