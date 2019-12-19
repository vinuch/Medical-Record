<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Patient Registration Form</title>
</head>

<body style="background-image:url('img/md.jpg'); background-size:cover;background-repeat:no-repeat;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <aside>
                        <div class="sidebar mt-5 text-center" id="sidebar">
                            <h6 class="mb-4" hidden><a href="PatientRegistrationForm.php">HOSPITAL INFORMATION</a></h6>
                            <h6 class="mb-4"><a href="PatientRegistrationForm1.php">PATIENT INFORMATION</a></h6>
                            <h6 class="mb-4"><a href="PatientRegistrationForm2.php">EMERGENCY CONTACT</a></h6>
                            <h6 class="mb-4"><a href="MedicalHistory1.php">MEDICAL HISTORY</a></h6>
                            <h6 class="mb-4"><a href="MedicalHistory2.php">MEDICAL HISTORY (CONTD.)</a></h6>

                        </div>
                    </aside>
                </div>

                <div class="col-md-8">
                    <div>
                        <h2 class="text-center">NEW PATIENT REGISTRATION</h2>
                    </div>
                    <div>
                        <h6 class="text-center">Please fill in the form below</h6>
                        <h4> Hospital Information </h4>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-control">
                                    <label>Hospital Name:</label>
                                    <input type="text" name="hospitalname" required>
                                </div>
                                <div class="form-control">
                                    <label>City:</label>
                                    <input type="text" name="city">
                                </div>
                                <div class="form-control">
                                    <label>State/Province:</label>
                                    <input type="text" name="state">
                                </div>
                                <div class="form-control">
                                    <label>Postal/Zip code:</label>
                                    <input type="tel" name="postal">
                                </div>
                                <div class="form-control">
                                    <label>Country:</label>
                                    <input type="text" name="country">
                                </div>
                                <div class="form-control">
                                    <label>Hospital Phone Number:</label>
                                    <input type="text" name="">
                                </div>
                                <div class="form-control">
                                    <label>Chart Number:</label>
                                    <input type="text" name="">
                                </div>
                                <div class="form-control">
                                    <label>Registration Clerk ID:</label>
                                    <input type="text" name="">
                                </div>
                                <div class="form-control">
                                    <label>Registration Location:</label>
                                    <input type="text" name="" placeholder="ex: ER, Clinic etc.....">
                                </div>
                                <div class="form-control">
                                    <label>Registration Date:</label>
                                    <input type="date" name="">
                                </div>
                                <div class="form-control mb-3">
                                    <label>Registration Time:</label>
                                    <input type="time" name="">
                                </div>
                                <div align="center">
                                    <a class="btn-lg" href="PatientRegistrationForm1.php" name="" style="background-color:#C9DAE4">Next</a>
                                </div>
                            </form>
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
