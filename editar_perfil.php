<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nome = $email = $estilo_musical = $tipo = "";
$id = $_SESSION["id"];
$nome_err = $email_err = $estilo_musical_err = $tipo_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate nome completo
    if(empty(trim($_POST["nome"]))){
        $nome_err = "Insere o teu nome completo.";     
    } elseif(strlen(trim($_POST["nome"])) < 5){
        $nome_err = "O teu nome tem de ter pelo menos 5 caracteres.";
    } else{
        $nome = trim($_POST["nome"]);
    }

    // Validate estilo musical
    if(empty(trim($_POST["email"]))){
        $email_err = "Insere o teu email.";     
    } elseif(strlen(trim($_POST["email"])) < 5){
        $email_err = "O teu email é demasiado pequeno.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Validate email
    if(empty(trim($_POST["estilo_musical"]))){
        $estilo_musical_err = "Insere o teu estilo musical favorito.";     
    } elseif(strlen(trim($_POST["estilo_musical"])) < 1){
        $estilo_musical_err = "Insere o teu estilo musical favorito.";
    } else{
        $estilo_musical = trim($_POST["estilo_musical"]);
    }
    // Validate tipo
    if(empty(trim($_POST["tipo"]))){
        $tipo_err = "És um artista ou um fã?";     
    } elseif(strlen(trim($_POST["tipo"])) < 2){
        $tipo_err = 'Escolhe um dos dois: "artista" ou "fã"';
    } else{
        $tipo = trim($_POST["tipo"]);
    }
    
        
    // Check input errors before updating the database
    if(empty($nome_err) && empty($email_err) && empty($estilo_musical_err) && empty($tipo_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET nome = ?, email = ?, estilo_musical = ?, tipo = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            // mysqli_stmt_bind_param($stmt, "si", $param_nome, $param_email, $param_estilo_musical, $param_tipo, $param_id);

            
            // Set parameters
            // $param_email = $email;
            // $param_estilo_musical = $estilo_musical;
            // $param_nome = $nome;
            // $param_tipo = $tipo;
            // $param_id = $_SESSION["id"];
            
            $sql = "UPDATE users SET nome = '$nome', email = '$email', estilo_musical = '$estilo_musical', tipo = '$tipo' WHERE id = $id";

            // echo $sql ; 
            // exit ();

            if (mysqli_query($link, $sql)) {
                echo "Record updated successfully";
                header("location: welcome.php");
              } else {
                echo "Error updating record: " . mysqli_error($link);
              }

              header("location: login.php");
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?> 
<!DOCTYPE html> 
<html lang="en-US"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"> 
        <link rel="shortcut icon" href="assets/images/homeify-121x113.png" type="image/x-icon"> 
        <meta name="description" content=""> 
        <title>Perfil</title>         
        <link rel="stylesheet" href="assets/font-awesome-regular/../css/fontawesome.min.css"> 
        <link rel="stylesheet" href="assets/font-awesome-regular/css/regular.min.css"> 
        <link rel="stylesheet" href="assets/font-awesome-solid/../css/fontawesome.min.css"> 
        <link rel="stylesheet" href="assets/font-awesome-solid/css/solid.min.css"> 
        <link rel="stylesheet" href="assets/material-design/css/material-icons.min.css"> 
        <link rel="stylesheet" href="assets/tether/tether.min.css"> 
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css"> 
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css"> 
        <link rel="stylesheet" href="assets/dropdown/css/style.css"> 
        <link rel="stylesheet" href="assets/socicon/css/styles.css"> 
        <link rel="stylesheet" href="assets/theme/css/style.css"> 
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"> 
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> 
    </head>     
    <section class="menu cid-s48OLK6784" once="menu" id="menu1-15"> 
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg"> 
            <div class="container"> 
                <div class="navbar-brand"> 
                    <span class="navbar-logo"> <a href="index_in.php"> <img src="assets/images/homeify-121x113.png" alt="" style="height: 3.8rem;"> </a> </span> 
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index_in.php">Homeify</a></span> 
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
                        <li class="nav-item dropdown open"> 
                            <a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="material material-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a> 
                            <div class="dropdown-menu"> 
                                <a class="text-black text-primary dropdown-item display-4" href="artistas.php">ARTISTAS<br></a> 
                                <a class="text-black text-primary dropdown-item display-4" href="fas.php" aria-expanded="false">FÃS</a> 
                            </div>                             
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-link link text-black text-primary display-4" href="agenda_in.php"><span class="far fa-fw fa-calendar mbr-iconfont mbr-iconfont-btn"></span>AGENDA</a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-link link text-black text-primary display-4" href="quem_somos_in.php" aria-expanded="false"><span class="material material-people mbr-iconfont mbr-iconfont-btn"></span>QUEM SOMOS</a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-link link text-black text-primary display-4" href="perfil.php" aria-expanded="false"><span class="fas fa-fw fa-door-open mbr-iconfont mbr-iconfont-btn"></span>PERFIL</a> 
                        </li>                         
                    </ul>                     
                </div>                 
            </div>             
        </nav>         
    </section>     
    <section class="cid-spVZDK9FzS form7 text-right" id="form7-10"> 
        <h3 class="align-center display-5 mb-0 mbr-fonts-style mbr-section-title">Preenche este formulário para editar os teus dados.</h3> 
        <div class="container"> 
            <div class="mbr-section-head"> 
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"> </h3> 
            </div>             
            <div class="justify-content-center mt-4 row text-left"> 
                <div class="col-lg-6 wrapper"> 
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                        <div class="form-group"> 
                            <label class="mbr-text mbr-fonts-style display-7">Nome</label>                             
                            <input type="text" name="nome" class="form-control <?php echo (!empty($nome_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nome; ?>"> 
                            <span class="invalid-feedback"><?php echo $nome_err; ?></span> 
                        </div>                         
                        <div class="form-group"> 
                            <label class="mbr-text mbr-fonts-style display-7">Email</label>                             
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"> 
                            <span class="invalid-feedback"><?php echo $email_err; ?></span> 
                        </div>                         
                        <div class="form-group"> 
                            <label class="mbr-text mbr-fonts-style display-7">Estilo musical favorito</label>                             
                            <select name="estilo_musical" id="estilo_musical" class="form-control <?php echo (!empty($estilo_musical_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $estilo_musical; ?>"> 
                            <option value="Blues">Blues</option>
<option value="Country">Country</option>
<option value="Eletrónica">Eletrónica</option>
<option value="Fado">Fado</option>
<option value="Funk">Funk</option>
<option value="Gospel">Gospel</option>
<option value="Hardcore">Hardcore</option>
<option value="Heavy Metal">Heavy Metal</option>
<option value="Hip Hop">Hip Hop</option>
<option value="Jazz">Jazz</option>
<option value="MPB">MPB</option>
<option value="Música Folclórica">Música Folclórica</option>
<option value="Ópera">Ópera</option>
<option value="Pop">Pop</option>
<option value="Punk">Punk</option>
<option value="R&B">R&B</option>
<option value="Rap">Rap</option>
<option value="Reggae">Reggae</option>
<option value="Rock">Rock</option>
<option value="Samba">Samba</option>
<option value="Soul">Soul</option>
                                          
                            </select>  
                            <span class="invalid-feedback"><?php echo $estilo_musical_err; ?></span> 
                        </div>                         
                        <div class="form-group"> 
                            <label class="mbr-text mbr-fonts-style display-7">Tipo de utilizador</label>                             
                            <!-- <input type="text" name="tipo" class="form-control <?php echo (!empty($tipo_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tipo; ?>"> -->                             
                            <select name="tipo" id="tipo" class="form-control <?php echo (!empty($tipo_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tipo; ?>"> 
                                <option value="artista">Artista</option>                                 
                                <option value="fa">Fã</option>                                 
                            </select>                             
                            <span class="invalid-feedback"><?php echo $tipo_err; ?></span> 
                        </div>                         
                        <div class="mbr-section-btn mt-3"> 
                            <input type="submit" class="btn btn-secondary display-4 float-left" value="Confirmar"> 
                            <a class="btn btn-secondary display-4 float-right" href="welcome.php">Cancelar</a>                              
                        </div>                         
                </div>                 
            </form>             
        </div>         
        <a class="btn btn-secondary display-4 float-center m-5 p-auto" href="logout.php">Logout</a>
    </section>     
    <section id="top-1" hidden> 
        <a href="https://mobirise.site"></a> 
    </section>     
    <section class="footer1 cid-spVNvGeVDB" once="footers" id="footer1-y"> 
        <div class="container"> 
            <div class="row mbr-white"> 
                <div class="col-12 col-md-6 col-lg-3"> 
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"> <strong>Ajuda</strong> </h5> 
                    <ul class="list mbr-fonts-style display-4"> 
                        <li class="mbr-text item-wrap"> 
                            <span style="font-size: 1.1rem;">Contactos</span> 
                        </li>                         
                        <li class="mbr-text item-wrap"> 
                            <a href="https://homeify.azurewebsites.net/faqs.html" class="text-white">FAQs</a> 
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-12 col-md-6 col-lg-3"> 
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Equipamento</strong></h5> 
                    <ul class="list mbr-fonts-style display-4"> 
                        <li class="mbr-text item-wrap"> 
                            <span style="font-size: 1.1rem;">Galeria</span> 
                        </li>                         
                        <li class="mbr-text item-wrap"> 
                            <span style="font-size: 1.1rem;">Preçário<br></span> 
                            <br> 
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-12 col-md-6 col-lg-3"> 
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"><strong>Agendamento</strong></h5> 
                    <ul class="list mbr-fonts-style display-4"> 
                        <li class="mbr-text item-wrap">Estúdio</li>                         
                        <li class="mbr-text item-wrap">Aluguer de Equipamento</li>                         
                        <li class="item-wrap mbr-text" href="https://homeify.azurewebsites.net/termos.html"> 
                            <a href="https://homeify.azurewebsites.net/termos.html" class="text-white">Termos de Utilização</a> 
                        </li>                         
                        <li class="mbr-text item-wrap"> 
                            <br> 
                        </li>                         
                    </ul>                     
                </div>                 
                <div class="col-12 col-md-6 col-lg-3"> 
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5> 
                    <p class="mbr-text mbr-fonts-style mb-4 display-4"></p> 
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7"> <strong>Social</strong> </h5> 
                    <div class="social-row display-7"> 
                        <div class="soc-item"> 
                            <a href="http://facebook.com" target="_blank"> <span class="mbr-iconfont socicon-facebook socicon"></span> </a> 
                        </div>                         
                        <div class="soc-item"> 
                            <a href="https://twitter.com" target="_blank"> <span class="mbr-iconfont socicon-twitter socicon"></span> </a> 
                        </div>                         
                        <div class="soc-item"> 
                            <a href="http://instagram.com" target="_blank"> <span class="mbr-iconfont socicon-instagram socicon"></span> </a> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </div>         
    </section>     
    <script src="assets/web/assets/jquery/jquery.min.js"></script>     
    <script src="assets/popper/popper.min.js"></script>     
    <script src="assets/tether/tether.min.js"></script>     
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>     
    <script src="assets/smoothscroll/smooth-scroll.js"></script>     
    <script src="assets/dropdown/js/nav-dropdown.js"></script>     
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>     
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>     
    <script src="assets/theme/js/script.js"></script>     
</body> 
