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
                            <h6 class="mb-4" hidden><a href="MedicalHistory1.php">MEDICAL HISTORY</a></h6>
                            <h6 class="mb-4"><a href="MedicalHistory2.php">MEDICAL HISTORY (CONTD.)</a></h6>

                        </div>
                    </aside>
                </div>

                <div class="col-md-8">
                    <div>
                        <h2 class="text-center">MEDICAL HISTORY</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-control">
                                    <label>Any Drug Allergies?</label>
                                    <select name="allergies">
                                        <option>--Select--</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="form-control">
                                    <p>If yes, Please State the drug</p>
                                    <textarea></textarea>
                                </div>
                                <div class="form-control">
                                    <label>Blood Group</label>
                                    <select>
                                        <option>--Select</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB</option>
                                    </select>
                                </div>
                                <div class="form-control">
                                    <label>Genotype</label>
                                    <select>
                                        <option>--Select--</option>
                                        <option>AA</option>
                                        <option>AS</option>
                                        <option>SS</option>

                                    </select>
                                </div>
                                <div class="form-control">
                                    <label>Have you ever had (Please select all that apply):</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" id="anaemia">
                                            <label for="anaemia">Anaemia</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="asthma">
                                            <label for="asthma">Asthma</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="athritis">
                                            <label for="athritis">Athritis</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="cancer">
                                            <label for="cancer">Cancer</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="gout">
                                            <label for="gout">Gout</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="diabetes">
                                            <label for="diabetes">Diabetes</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="emotionaldisorder">
                                            <label for="emotionaldisorder">Emotional Disorder</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="spilepsyseizure">
                                            <label for="spilepsyseizure">Epilepsy Seizure</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="faintingspell">
                                            <label for="faintingspell">Fainting Spell</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="gallstone">
                                            <label for="gallstone">Gallstone</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="heartdisease">
                                            <label for="heartdisease">Heart Disease</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="heartattack">
                                            <label for="heartattack">Heart Attack</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="rheumaticfever">
                                            <label for="rheumaticfever">Rheumatic Fever</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="highbloodpressure">
                                            <label for="highbloodpressure">High Blood Pressure</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="digestiveproblems">
                                            <label for="digestiveproblems">Digestive Problems</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ulcerdisease">
                                            <label for="ulcerdisease">Ulcer Disease</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hepatitis">
                                            <label for="hepatitis">Hepatitis</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="kidneydisease">
                                            <label for="kidneydisease">Kidney Disease</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="liverdisease">
                                            <label for="liverdisease">Liver Disease</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="sleepapnea">
                                            <label for="sleepapnea">Sleep Apnea</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="thyriodproblem">
                                            <label for="thyriodproblem">Thyriod Problem</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="tuberculosis">
                                            <label for="tuberculosis">Tuberculosis</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="veneraldisease">
                                            <label for="veneraldisease">Veneral Disease</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="neurologicaldisorder">
                                            <label for="neurologicaldisorder">Neurological Disorder</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bleedingdisorder">
                                            <label for="bleedingdisorder">Bleeding Disorder</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="lungdisease">
                                            <label for="lungdisease">Lung Disease</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-control">
                                    <p>Others illnesses:</p>
                                    <textarea></textarea>
                                </div>
                                <div class="form-control">
                                    <p>Surgical Operation and date:</p>
                                    <textarea></textarea>
                                </div>
                                <div class="form-control mb-3">
                                    <p>Current Medication:</p>
                                    <textarea></textarea>
                                </div>
                                <div align="center">
                                    <a class="btn-lg" href="PatientRegistrationForm2.php" name="" style="background-color:#C9DAE4">Back</a>
                                    <a class="btn-lg" href="MedicalHistory2.php" name="" style="background-color:#C9DAE4">Next</a>
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
