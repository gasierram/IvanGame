<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />     -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/game.css">


    <title>U Bosque Game</title>
  </head>
  <body class="bg">
    <div class="page-holder">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <section>
                        <div class="container " style="padding-top: 30px;">
                            <div class="row ">
                                <div class="col tittle-box text-center ">
                                    <h2>
                                        <span id="seconds" class="count" style="color: white; font-size: xx-large;"></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </section> 
                    
                    <div  class="game">
                    <div class="tittle-box text-center paralelo">
                        <div>
                            <h5>Lorem ipsum dolor sit amet, consectetur </h5>

                        </div>
                    </div>
                    <div class="row">
                        <div class="logo col" >
                            <img class="img-responsive float-left"  src="img/logo-ubosque.png" alt="logo" style="width: auto; height: 85%;">
                            <img class="img-responsive float-right" src="img/score.png" alt="logo" style="width: auto; height: 85%;">
                        </div>                            
                    </div>
                    <br>
                    <div class=" container " >
                        <div class="row"  >
                            <div class="col d-flex align-items-start flex-column" >
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/yellow-op.png" class="help-cat" alt="assistant" >
                                </a>
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/green-op.png" class="help-cat" alt="assistant" >
                                </a>
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/purple-op.png" class="help-cat" alt="assistant" >
                                </a>
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/blue-op.png" class="help-cat" alt="assistant" >
                                </a>
                            </div>
                            <div class="col d-flex align-items-end flex-column" >
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/help1.png" class="help-cat" alt="assistant">
                                </a>
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/help2.png" class="help-cat" alt="assistant">
                                </a>
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/help3.png" class="help-cat" alt="assistant">
                                </a>
                                <a class="help-dv" data-toggle="modal" data-target="#exampleModalCenter">
                                    <img src="img/help4.png" class="help-cat" alt="assistant">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="pad text-center">
                        <form class="form-signin" action="categories.php" method="post">
                            <div class="question">
                                <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="" for="flexRadioDefault1">
                                    A: Lorem
                                </label>
                            </div>
                            <div class="question">
                                <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="" for="flexRadioDefault2">
                                    B: Ipsum
                                </label>
                            </div>
                            <div class="question">
                                <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="" for="flexRadioDefault2">
                                    C: Dolor
                                </label>
                            </div>
                            <div class="question">
                                <input class="" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="" for="flexRadioDefault2">
                                    D: Sit Amet
                                </label>
                            </div>                                                        
                            <!-- <div>
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/quest-bg.png" width="100%" height="20" alt="submit" />
                                </button>
                                
                            </div>                                
                            <div>
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/quest-bg.png" width="100%" height="20" alt="submit" />
                                </button>
                                
                            </div>   
                            <div>
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="img/quest-bg.png" width="100%" height="20" alt="submit" />
                                </button>
                                
                            </div>      -->
                        </form>
                    </div>

                    <?php
                include("nav-rss.php");
                ?>  
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </div>    
 


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Nombre Ayuda</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => { 
            let cronometro = document.getElementById("seconds");
            let final = Date.now() + 60000;
            let elcrono = setInterval(tiempo,10); 
            function tiempo() {
                let diferencia= final-Date.now();
                let sg = diferencia/1000
                if (diferencia<=0) {
                    clearInterval(elcrono);
                    cronometro.classList.add('rojo');
                    sg=0.0;
                }
                cronometro.innerHTML= Math.trunc(sg);
            }
      });
      </script>
  </body>
</html>