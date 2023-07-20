<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <div class="login rounded-4 m-5 mt-5 text-center">
            <i class="bi bi-person-circle text-light" style="font-size: 6em;"></i>
            <div id="row"class="d-flex justify-content-center pb-4">
                <form action="inicio.php" method="post">
                    <h6 class="text-center fs-4 mb-4 text-light">Login</h6>
                    <input type="email" name="user" id="user" class="form-control mb-4" placeholder="usuario" required>
                    <input type="password" name="pass" id="pass" class="form-control mb-4" placeholder="contraseña" required>
                    <div class="d-flex justify-content-center"><input type="submit" value="Enviar" class="btn btn-light mb-3 px-5 text-light"></div>
                    <a href="../index.php" id="volver" class="text-light"><i class="bi bi-arrow-left-short"></i>Volver</a>
                </form>
            </div>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>