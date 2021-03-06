<!doctype html>
<html lang="es">
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
    <link rel="stylesheet" href="css/categories.css">


    <title>U Bosque Game</title>
  </head>
  <body class="bg">
    <div class=" page-holder">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4 align-items-center">
                    <!-- <div class="tittle-box text-center paralelo">
                        <h5>Hola,<br> antes de iniciar <br> permítenos conocerte.</h5>
                    </div>
                    <div class="logo">
                        <img class="img-responsive" src="img/logo-ubosque.png" alt="logo">
                    </div>
                    <div class="text-center assistant">
                        <img src="img/assistant.png" class="img-fluid" alt="assistant">
                    </div> -->
                    <div class="text-center head-game">
                        <img class="img-responsive head-img" src="img/silvia.png" alt="logo">

                    </div>
                    <div class="pad text-center ">
                        <form class="form-signin" action="question.php" method="post">
                            <div>
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/yellow-cat1.png" width="140" height="52" alt="submit" />
                                </button>
                                
                            </div>
                            <div  style="margin-right: -40px;">
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/green-cat1.png" width="140" height="52" alt="submit" />
                                </button>    
                            </div>
                            <div  style="margin-right: -80px;">
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/purple-cat1.png" width="150" height="52" alt="submit" />
                                </button>
                            </div>
                            <div  style="margin-right: -120px;">
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/blue-cat1.png" width="140" height="52" alt="submit" />
                                </button>
    
                            </div>
                            <!--                                 
                            <div class=" ">      
                                <input type='checkbox' name='thing' class="input-cat-yw" value='valuable' id="thing"/><label for="thing"></label> 
                            </div>
                            <div class=" ">
                                <input type='checkbox' name='thing' class="input-cat-gr" value='valuable' id="thing"/><label for="thing"></label> 
                            </div>
                            <div class=" ">
                                <input type='checkbox' name='thing' class="input-cat-pr" value='valuable' id="thing"/><label for="thing"></label> 
                            </div>                            
                            <div class=" ">
                                <input type='checkbox' name='thing' class="input-cat-bl" value='valuable' id="thing"/><label for="thing"></label> 
                            </div>                             -->
                        </form>
                    </div>

                    <?php
                    include("nav-rss.php");
                    ?>
   
                </div>
                <div class="col-sm-4">
                </div>
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