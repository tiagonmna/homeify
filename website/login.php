<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: homeify_in.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: homeify_in.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/homeify-121x113.png" type="image/x-icon">
    <meta name="description" content="">


    <title>Login</title>
    <link rel="stylesheet" href="assets/font-awesome-regular/../css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome-regular/css/regular.min.css">
    <link rel="stylesheet" href="assets/font-awesome-solid/../css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome-solid/css/solid.min.css">
    <link rel="stylesheet" href="assets/material-design/css/material-icons.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section class="menu cid-s48OLK6784" once="menu" id="menu1-z">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="/homeify/website/homeify_in.php">
                            <img src="assets/images/homeify-121x113.png" alt="" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="/homeify/website/homeify_in.php">Homeify</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item dropdown open"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="material material-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a>
                            <div class="dropdown-menu"><a class="text-black text-primary dropdown-item display-4" href="artistas.php">ARTISTAS<br></a><a class="text-black text-primary dropdown-item display-4" href="fas.php" aria-expanded="false">FÃS</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="agenda.php"><span class="far fa-fw fa-calendar mbr-iconfont mbr-iconfont-btn"></span>AGENDA</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="quem_somos_in.php" aria-expanded="false"><span class="material material-people mbr-iconfont mbr-iconfont-btn"></span>QUEM SOMOS</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="/homeify/website/login.php" aria-expanded="false"><span class="fas fa-fw fa-door-open mbr-iconfont mbr-iconfont-btn"></span>LOGIN</a></li>
                    </ul>


                </div>
            </div>
        </nav>

    </section>

    <section class="form7 cid-spVZDK9FzS" id="form7-10">


        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Junta-te à família Homeify</strong>
                </h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="wrapper">
                    <h2>Login</h2>
                    <p>Por favor preenche as credenciais de Login</p>

                    <?php
                    if (!empty($login_err)) {
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nome de Utilizador</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Palavra Passe</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Login">

                        </div>
                        <p>Não tens uma conta? <a href="register.php">Inscreve-te!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="footer1 cid-spVNvGeVDB" once="footers" id="footer1-y">



        <div class="container">
            <div class="row mbr-white">
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Ajuda</strong>
                    </h5>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Contactos</span></li>
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">FAQs</span></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Equipamento</strong></h5>
                    <ul class="list mbr-fonts-style display-4">

                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Galeria</span></li>
                        <li class="mbr-text item-wrap"><span style="font-size: 1.1rem;">Preçário<br></span><br></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Agendamento</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <li class="mbr-text item-wrap">Estúdio</li>
                        <li class="mbr-text item-wrap">Aluguer de Equipamento</li>
                        <li class="mbr-text item-wrap"><br></li>
                        <li class="mbr-text item-wrap"><br></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4"></p>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                        <strong>Social</strong>
                    </h5>
                    <div class="social-row display-7">
                        <div class="soc-item">
                            <a href="http://facebook.com" target="_blank">
                                <span class="mbr-iconfont socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com" target="_blank">
                                <span class="mbr-iconfont socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="http://instagram.com" target="_blank">
                                <span class="mbr-iconfont socicon-instagram socicon"></span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="top-1" hidden><a href="https://mobirise.site"></a></section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>


</body>

</html>