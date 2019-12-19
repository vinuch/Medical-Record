<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Pediatric Registration Form</title>
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
                <div class="col-md">
                    <div>
                        <h2 class="text-center">PEDIATRIC REGISTRATION FORM</h2>
                    </div>
                    <div>
                        <h6 class="text-center">Please fill in the form below</h6>
                    </div>
                    <br>
                    <br>
                    <h3>Patient Information</h3>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-control">
                                    <label>First Name:</label>
                                    <input type="text" name="firstname" required>
                                </div>
                                <div class="form-control">
                                    <label>Middle Name:</label>
                                    <input type="text" name="middlename">
                                </div>

                                <div class="form-control">
                                    <label>Last Name:</label>
                                    <input type="text" name="lastname" required>
                                </div>

                                <div class="form-control">
                                    <label>Date Of Birth:</label>
                                    <input type="Date" name="dateofbirth" required>
                                </div>
                                <div class="form-control">
                                    <label>Address:</label>
                                    <input type="text" name="address" required>
                                </div>
                                <div class="form-control">
                                    <label>City:</label>
                                    <input type="text" name="city" required>
                                </div>
                                <div class="form-control">
                                    <label>State/Province:</label>
                                    <input type="text" name="state" required>
                                </div>
                                <h3>Parent/Guardian Name</h3>
                                <div class="form-control">
                                    <label>First Name:</label>
                                    <input type="text" name="pfirstname" required>
                                </div>
                                <div class="form-control">
                                    <label>Last Name:</label>
                                    <input type="text" name="plastname">
                                </div>
                                <div class="form-control">
                                    <label>Parent Email Address(Optional):</label>
                                    <input type="email" name="pemail">
                                </div>
                                <div class="form-control">
                                    <label>Patient Gender:</label>
                                    <select name="gender">
                                        <option>--Select--</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-control">
                                    <label>Primary Language Spoken:</label>
                                    <input type="radio" name="lang"><label>Igbo</label>
                                    <input type="radio" name="lang"><label>Yoruba</label>
                                    <input type="radio" name="lang"><label>Hausa</label>
                                    <input type="radio" name="lang"><label>English</label>
                                </div>
                                <div class="form-control">
                                    <label>Nationality:</label>
                                    <input type="text" name="nationality" required>
                                </div>
                                <div class="form-control">
                                    <label>State of Origin:</label>
                                    <input type="text" name="stateoforigin" required>
                                </div>
                                <div class="form-control mb-3">
                                    <label>L.G.A:</label>
                                    <input type="text" name="lga" required>
                                </div>
                                <div align="center">
                                    <a class="btn-lg" href="PediatricForm1.php" name="" style="background-color:#C9DAE4">Next</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

    </section>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</body>

</html>
