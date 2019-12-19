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
                    <div>
                        <h3 class="text-center"><b>Medical History</b></h3>
                    </div>
                    <h5>Pediatrician Name</h5>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-control">
                                    <label><b>First Name:</b></label>
                                    <input type="text" name="pedfirstname" required>
                                </div>
                                <div class="form-control">
                                    <label><b>Last Name:</b></label>
                                    <input type="text" name="pedlastname" required>
                                </div>
                                <div>
                                    <h5>What is the name of the hospital where the child was born? :* </h5>
                                    <textarea class="form-control" cols="20" rows="3" required></textarea>
                                </div>
                                <div>
                                    <h5>What was the mothers lenght of pregnancy? :* </h5>
                                </div>
                                <div class="form-control">
                                    <input type="radio" name="1"><label class="ml-2"><b>37-40 weeks</b></label>
                                    <input type="radio" name="1"><label class="ml-2"><b>30-36 weeks</b></label>
                                    <input type="radio" name="1"><label class="ml-2"><b>25-29 weeks</b></label>
                                    <input type="radio" name="1"><label class="ml-2"><b>25 below</b></label>
                                </div>
                                <div>
                                    <h5>How was the mothers labour? :*</h5>
                                </div>
                                <div class="form-control">
                                    <input type="radio" name="1"><label class="ml-2"><strong>Spontenaous</strong></label>
                                    <input type="radio" name="1"><label class="ml-2"><b>Induced</b></label>
                                    <input type="radio" name="1"><label class="ml-2"><b>Vaginal</b></label>
                                    <input type="radio" name="1"><label class="ml-2"><b>C-Section</b></label>
                                </div>
                                <div>
                                    <h5>If it was induced, which medications or drugs were used? :</h5>
                                    <textarea class="form-control" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-control">
                                    <label><b>Patient's birth weight (pounds) :</b></label>
                                    <input type="text" name="weight" placeholder="e.g 7.5 pounds">
                                </div>
                                <div>
                                    <h5>Tick any complications at time of birth :*</h5>
                                </div>
                                <div class="form-control">
                                    <div><input type="checkbox" name="com1"><label>Jaundice</label></div>
                                    <div><input type="checkbox" name="com2"><label>Low Birth Weight</label></div>
                                    <div><input type="checkbox" name="com3"><label>Respiratory Difficulties</label></div>
                                    <div><input type="checkbox" name="com4"><label>Infection by Baby or Mother</label></div>
                                    <div><input type="checkbox" name="com5"><label>HIV/AIDS</label></div>
                                    <div><input type="checkbox" name="com6"><label>Swallowing/Sucking difficulties</label></div>
                                    <div><input type="checkbox" name="com7"><label>Heart/Cadiovascular</label></div>
                                    <div><input type="checkbox" name="com8"><label>Nuchal cord</label></div>
                                    <div><input type="checkbox" name="com9"><label>Breech Birth</label></div>
                                    <div><label>Other :</label><input type="text" name="other"></div>
                                </div>
                                <div>
                                    <h5>Has the patient experienced any of the following medical complications? :*</h5>
                                </div>
                                <div class="form-control">
                                    <div><input type="checkbox" name="com1"><label class="ml-2">HIV/AIDS</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Asthma</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Develomental delay</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Measles</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">ADHD</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Cancer</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Genetic disorders</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Influenza</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Malaria</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Endocrine System Disorder</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Hearing loss</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Headaches</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Ear Infection</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Vision</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Learning Disability</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Autism</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Allergy/Sinus Problems</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Meningitis</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Gastrointestinal Problems</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Blood Disorder</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Chicken Pox</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Diabetes</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Heart Problems</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Speech Delay</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Physical Impairment</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">UTI</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Behavioural Disorder</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">None of this</label></div>
                                    <div><input type="checkbox" name="com1"><label class="ml-2">Jaundice</label></div>
                                </div>
                                <div>
                                    <h5>Additional Medical History/Symptoms :</h5>
                                    <textarea rows="3" cols="20"></textarea>
                                </div>
                                <div class="pb-3">
                                    <h5>Is the patient currently taking any medication?</h5>
                                    <input type="radio" name="2"><label class="ml-2">Yes</label>
                                    <input type="radio" name="2"><label class="ml-2">No</label>
                                </div>
                                <div align="center">
                                    <a class="btn-lg" href="" name="btnsubmit" style="background-color:#C9DAE4">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>

</body>

</html>
