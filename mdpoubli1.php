<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Notre CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Start your project here-->
    <div class="container">


        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

            <div class="text-center">
                <img class="mb-5" src="img/Espace_entreprise_logo.svg" style="width: 12rem"/>
                <div class="card-body shadow-3-strong bordDeCarte" style="width: 30rem ">
                    <form action="mdpoubli.php" method="get">
                        <div class="mdpoubli.php">
                            <!-- Email input -->
                            <div class="row mb-0 m-3 mt-4">
                                <div class="col-1 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </div>
                                <div class="col-11">
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example1" class="form-control" name="mail"/>
                                        <label class="form-label" for="form2Example1">Votre adresse E-mail</label>
                                    </div>
                                </div>
                            </div>

                                <!-- Submit button -->
                                <div class="col">
                                <input type="submit" value="changer de mot de passe" class="btn btn-success btn-block mb-3 btn-rounded">
                                </div>
                            </div>



                        </div>

                        

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Fond vert de la page login -->
    <div id="background">
    </div>

    <!-- End your project here-->
</body>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/script.js"></script>


</html>