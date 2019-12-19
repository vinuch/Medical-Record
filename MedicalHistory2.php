<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Medical History</title>
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
                            <h6 class="mb-4"><a href="PatientRegistrationForm.php">HOSPITAL INFORMATION</a></h6>
                            <h6 class="mb-4"><a href="PatientRegistrationForm1.php">PATIENT INFORMATION</a></h6>
                            <h6 class="mb-4"><a href="PatientRegistrationForm2.php">EMERGENCY CONTACT</a></h6>
                            <h6 class="mb-4"><a href="MedicalHistory1.php">MEDICAL HISTORY</a></h6>
                            <h6 class="mb-4" hidden><a href="MedicalHistory2.php">MEDICAL HISTORY (CONTD.)</a></h6>

                        </div>
                    </aside>
                </div>

                <div class="col-md-8">
                    <div>
                        <h2 class="text-center">MEDICAL HISTORY (CONTD)</h2>
                    </div>
                    <div>
                        <h4 class="text-center">Healthy and Unhealthy Habits</h4>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-control">
                                    <h5><b>Exercise</b></h5>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <label>Never</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>1 - 2 days</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>3 - 4 days</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>5+ days</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-control">
                                    <h5><b>Eating following a diet</b></h5>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <label>I have a loose diet</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>I have a strict diet</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>I don't have a diet plan</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-control">
                                    <h5><b>Alcohol Consumption</b></h5>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <label>I don't drink</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>1 - 2 glasses/day</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>3 - 4 glasses/day</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>5+ glasses/day</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-control">
                                    <h5><b>Caffeine Consumption</b></h5>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <label>I don't use caffeine</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>1 - 2 cups/day</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>3 - 4 cups/day</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>5+ cups/day</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-control mb-3">
                                    <h5><b>Do you smoke?</b></h5>
                                    <ul>
                                        <li>
                                            <input type="checkbox">
                                            <label>No</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>0 - 1 pack/day</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>1 - 2 packs/day</label>
                                        </li>
                                        <li>
                                            <input type="checkbox">
                                            <label>2+ packs/day</label>
                                        </li>
                                    </ul>
                                </div>
                                <div align="center">
                                    <a class="btn-lg" href="MedicalHistory1.php" name="" style="background-color:#C9DAE4">Back</a>
                                    <a class="btn-lg" href="" name="btnsubmit" style="background-color:#C9DAE4">Submit</a>
                                </div>
                                <div align="center pr-3">

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
