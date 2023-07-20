<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tickets.css">
</head>
<body>
    <!-- menu -->
    <?php 
        require_once("view/menu.php")
    ?> 

    <!-- Categoría-descuento -->
    <div class="d-flex justify-content-center mt-4">
        <div class="card text-center card1">
            <h5>Estudiante</h5>
            <p>Tienen un descuento</p>
            <p class="fw-bold">80%</p>
            <p class="text-secondary form-control-sm">*Presentar documentación</p>
        </div>
        <div class="card mx-1 text-center card2">
            <h5>Trainee</h5>
            <p>Tienen un descuento</p>
            <p class="fw-bold">50%</p>
            <p class="text-secondary form-control-sm">*Presentar documentación</p>
        </div>
        <div class="card mx-0 text-center card3">
            <h5>Junior</h5>
            <p>Tienen un descuento</p>
            <p class="fw-bold">15%</p>
            <p class="text-secondary form-control-sm">*Presentar documentación</p>
        </div>
    </div>

    <!-- formulario inscripción -->
    <div class="container" id="comprar">
        <p class="text-center mb-0">VENTA</p>
        <div class="fs-1 my-4 text-center fw-medium mb-2 mt-0">VALOR DE TICKET $200</div>
        <form action="#" method="post">
            <div class="row">
                <div class="col-md mb-3 nombre">
                    <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Nombre">
                </div>
                <div class="col-md mb-3">
                    <input type="text" name="apellido" id="apellido" class="form-control" required placeholder="Apellido">
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-3">
                    <input type="email" name="email" id="email" class="form-control" required placeholder="Correo">
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-3 cantidad">
                    <label for="cantEntradas">Cantidad</label>
                    <input type="number" name="cantEntradas" id="cantEntradas" onkeyup="calPrecioFinal()" class="form-control" required placeholder="cantidad">
                </div>
                <div class="col-md mb-3">
                    <label for="porcDescuento">Categoría</label>
                    <select class="form-select" id="porcDescuento" onchange="calPrecioFinal()" placeholder="Estudiante">
                        <option value="80">Estudiante</option>
                        <option value="50">Trainee</option>
                        <option value="15">Junior</option>
                    </select>                    
                </div>
                <div>
                    <input type="text" name="valorTotal" id="valorTotal" class="form-control alert alert-info" placeholder="Total a pagar: $">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md mb-3 reset">
                    <input type="reset" value="Borrar" class="btn btn-success w-100">
                </div>
                <div class="col-md mb-3">
                    <input type="submit" value="Resumen" class="btn btn-success w-100">
                </div>
            </div>
        </form>
    </div>


    <!-- footer -->
    <div class="d-flex justify-content-center align-items-center footer">
        <div><a href="">Preguntas frecuentes</a></div>
        <div><a href="">Contáctanos</a></div>
        <div><a href="">Prensa</a></div>
        <div><a href="">Conferencias</a></div>
        <div><a href="">Términos y condiciones</a></div>
        <div><a href="">Privacidad</a></div>
        <div><a href="">Estudiantes</a></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"    crossorigin="anonymous"></script>

    <script src="js/tickets.js"></script>
</body>
</html>