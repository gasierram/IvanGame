<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />     -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>U Bosque Game</title>
  </head>
  <body class="bg">
    <div class="container">
        <div class=" row">
            <div class="col d-none d-lg-block">
            </div>
            <div class="col align-items-center">

                <div class="row silvia-dv">
                    <div class="col">
                        <div class="">
                            <div class="main-title paralelo">Hola, antes de iniciar permítenos conocerte.</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="logo col" >
                        <img class="img-responsive float-left logo-u"  src="img/logo-ubosque.png" alt="logo">
                    </div>                            
                </div>
                <div class="row text-center" >
                    <div class="assist col" >
                        <img class="img-responsive" src="img/assistant.png" class="assistant"  alt="assistant" style="height: inherit;">
                    </div>                    
                </div>
                <?php

                include("con_db.php");
                if (isset($_POST['formsubmit'])) {
                    if (strlen($_POST['nombre'])  >=1 && strlen($_POST['email']) >=1
                    &&  strlen($_POST['telefono']) >=1) {
                        $name = trim($_POST['nombre']);
                        $email = trim($_POST['email']);
                        $telefono = trim($_POST['telefono']);
                        $date_today = date("Y-m-d H:i:s");
                        $consulta = "INSERT INTO CLIENT(name, email, contact_phone, date_registration) VALUES ('$name','$email','$telefono', '$date_today' )";
                        $resultado = mysqli_query($conex,$consulta);
                        if ($resultado) {
                            
                            header("Location: categories.php", TRUE, 301);
                            exit();            
                        } else {
                            ?>
                            <h3 class="bad"> ha ocurrido un error</h3>
                            <?php
                        }
                    } else {
                            ?>
                            <h3 class="bad"> por favor complete los campos</h3>
                            <?php
                    }
                }

                ?>
                <div class="container-fluid" style="margin-top: -15px; margin-bottom: -40px;">
                    <div class="row">
                        <div class="col">
                            <form class="form-signin"  method="post">
                                <div class="form">
                                    <input type="text" name="nombre" id="nombre" placeholder="&#xf2bd; TÚ NOMBRE" required="required">
                                    <input type="email" name="email" id="email" placeholder="&#xf003; TÚ MAIL" required="required">
                                    <input type="number" name="telefono" id="telefono" placeholder="&#xf10b;  TÚ CELU" required="required" minlength="10">

                                    <label class="acepto" id="c1">Acepto términos y condiciones
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>



                                    <!-- <div class="grupo-control-radio-personalizado">
                                        <input type="radio" class="radio-personalizado" name="miRadio">
                                        <label class="control-radio-personalizado-imagen">Acepto términos y condiciones</label>
                                    </div>  -->
                                    <div class="button">
                                        <a href="#" id="formsubmit" name="formsubmit" type="submit" style="border: 0; background: transparent"> <img src="img/iniciar.png" alt=""> </a>
                                    </div>  
                                
                                </div>

                            </form>
                        </div>
                    </div>
    
                </div>

        
                <?php
                include("nav-rss.php");
                ?>
            </div>
            <div class="col d-none d-lg-block">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/functions.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
