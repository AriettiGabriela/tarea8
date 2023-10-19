<?php
// 1) Conexion
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");

// 2) Preparar la orden SQL
// Sintaxis SQL SELECT
// SELECT * FROM nombre_tabla
// => Selecciona todos los campos de la siguiente tabla
// SELECT campos_tabla FROM nombre_tabla
// => Selecciona los siguientes campos de la siguiente tabla
$consulta = 'SELECT * FROM ropa';

// 3) Ejecutar la orden y obtenemos los registros
$datos = mysqli_query($conexion, $consulta);

// 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
while ($reg = mysqli_fetch_array($datos)) { ?>
    <div class="card col-sm-12 col-md-6 col-lg-3">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="" height="100%" )>
        <a href="ver.php?id=<?php echo $reg['id']; ?>" class="card-body">
            <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
            <span>$ <?php echo $reg['precio']; ?></span>
        </a>
    </div>

<?php } ?>