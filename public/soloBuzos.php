<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bodyframe">
    <section>
        <div class="container">
            <div class="row">
                <?php
                $conexion = mysqli_connect("127.0.0.1", "root", "");
                mysqli_select_db($conexion, "tienda");
                $consulta = 'SELECT * FROM ropa WHERE prenda="buzo"';
                $datos = mysqli_query($conexion, $consulta);

                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <div class="card col-sm-12 col-md-6 col-lg-3">
                        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="" height="100%" )>
                        <a href="ver.php?id=<?php echo $reg['id']; ?>" class="card-body">
                            <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
                            <span>$ <?php echo $reg['precio']; ?></span>
                        </a>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>