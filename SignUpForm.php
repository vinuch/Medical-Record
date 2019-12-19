<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>

<body style="background-image:url('img/md.jpg'); background-size:cover;background-repeat:no-repeat;">
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
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <h5><b>Stay informed on the latest medical news</b></h5>
                        <p>Read unlimited articles, expert perspectives, announcements, conference news and practice guidelines across specialties.</p>
                    </div>
                    <div>
                        <h5><b>Find accurate answers at the point-of-care</b></h5>
                        <p>Access the latest evidence-based diagnosis and treatment information, and search over 10,000 drugs, diseases, and procedures.</p>
                    </div>
                    <div>
                        <h5><b>Easily meet continuing education requirements</b></h5>
                        <p>Take free accredited courses to fulfill professional development and licensure requirements across 1,000+ clinical topics.</p>
                    </div>


                </div>
                <div class="col-md-8" align="center">
                    <div class="card w-50">
                        <div class="card-header">
                            <h2 class="text-center">Sign Up</h2>
                        </div>
                        <div class="class-body">
                            <form method="post" action="">
                                <div class="form-control">
                                    <label><b>Title:</b></label>
                                    <select>
                                        <option>--Select--</option>
                                        <option>--Dr.--</option>
                                        <option>--Nurse--</option>
                                        <option>--Lab Scientist--</option>
                                    </select>
                                </div>
                                <div class="form-control">
                                    <label><b>First Name :</b></label>
                                    <input type="text" name="Rfirstname" required>
                                </div>
                                <div class="form-control">
                                    <label><b>Last Name :</b></label>
                                    <input type="text" name="Rlastname" required>
                                </div>
                                <div class="form-control">
                                    <label><b>Email Address :</b></label>
                                    <input type="email" name="Remail" required>
                                </div>
                                <div class="form-control">
                                    <label><b>Username :</b></label>
                                    <input type="text" name="Runame" required>
                                </div>
                                <div class="form-control">
                                    <label><b>Password :</b></label>
                                    <input type="password" name="Rpword" required>
                                </div>
                                <div class="form-control mb-3">
                                    <label><b>Confirm Password :</b></label>
                                    <input type="password" name="">
                                </div>
                                <div>
                                    <h5>Submit Registration</h5>
                                    <input type="checkbox" required> <label>I agree to the<a href="" style="color:blue"> Terms of Use </a> and <a href="" style="color:blue"> Privacy Policy</a>.</label>
                                </div>
                                <div align="center" class="mt-3 mb-3">
                                    <a class="btn-lg" style="background-color:#C9DAE4" href="" name="btnsubmit">Submit</a>
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
