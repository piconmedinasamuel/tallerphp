<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="">
            <img src="img/nike.png" width="30" height="30 "alt="" loading="lady">
            TIENDA NIKE
          
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">TIENDA <span class="sr-only">(current)</span></a>
                </li>
                  
            </div>
          </nav>

    </header>
    <main>
        <div class="container">

        <div class="row justify-content-center mt-5">
        <div class="col-4">
            <form action="index.php" method="POST">
                <h5 class="text-center mb-4">FACTURA</h5>
                

                <div class=" row mb-3">
                    <div class="col">

                    <input type="text" class="form-control" placeholder="producto1" name="producto1">
                </div>

                <div class="col">

                  <input type="number" class="form-control" placeholder="precio1" name="precio1">
                </div>

                </div> 

                <div class=" row mb-3">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="producto2" name="producto2">
               
                </div>

                <div class="col">
                  <input type="number" class="form-control" placeholder="precio2" name="precio2">
                </div>
                </div>

                <div class=" row mb-3">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="producto3" name="producto3">
                </div>

                <div class="col">
                  <input type="number" class="form-control" placeholder="precio3" name="precio3">
                </div>
                </div>

                <div class=" row mb-3">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="producto4" name="producto4">
                </div>
             

                <div class="col">
                  <input type="number" class="form-control" placeholder="precio4" name="precio4">
                </div>
                </div>

                <div class=" row mb-3">
                    <div class="col">
                    <input type="text" class="form-control" placeholder="producto5" name="producto5">
                </div>
             

                <div class="col">
                  <input type="number" class="form-control" placeholder="precio5" name="precio5">
                </div>
                </div>

                
                    <button type="submit" class="btn btn-primary btn-block" name="boton">Comprar</button>
                    

                
                
                </div>
                </div>
                </div>
                </div>
    </form>

    <?php if(isset($_POST{"boton"})):?>
<h6 class="row justify-content-center mt-5">
<?php    
$producto1=$_POST{"producto1"};
$precio1=$_POST{"precio1"};

$producto2=$_POST{"producto2"};
$precio2=$_POST{"precio2"};

$producto3=$_POST{"producto3"};
$precio3=$_POST{"precio3"};

$producto4=$_POST{"producto4"};
$precio4=$_POST{"precio4"};

$producto5=$_POST{"producto5"};
$precio5=$_POST{"precio5"};     

$total=$precio1+$precio2+$precio3+$precio4+$precio5;

echo("SU PRIMER PRODUCTO--->".$producto1."---->".$precio1);
echo("<br>");
echo(" SU SEGUNDO PRODUCTO--->".$producto2."---->".$precio2);
echo("<br>");
echo("SU TERCER PRODUCTO--->".$producto3."---->".$precio3);
echo("<br>");
echo(" SU CUARTO PRODUCTO--->".$producto4."---->".$precio4);
echo("<br>");
echo("DE SU QUINTO PRODUCTO--->".$producto5."---->".$precio5);
echo("<br>");
echo("-----------------------------------------------------------");
echo("su factura es:".$total);?>
     
    <?php endif?>
    </h6>


    </main>
    <footer>

    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>