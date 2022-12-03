<?php
/* 1. Realice una aplicación que calcule el salario neto a pagar los empleados
de una Empresa. Dicha empresa realiza los siguientes descuentos.

ISSS (9%)
AFP (7%)
Renta (10%) - Se aplica, si el salario base es mayor a $ 472.00.

La aplicación debe pedir nombre, apellido y el salario base del empleado, mostrar
el salario neto y los descuentos respectivos.
Use formularios
Puede usar Bootstrap
La aplicación deber mostrar los resultados */
    $nombre = '';
    $apellido = '';
    $salarioneto = 0;
    $isss = 0;
    $afp= 0;
    $renta = 0;
    $salario = 0;

    if(isset($_POST[ 'enviar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $salario = $_POST['salario'];

        $isss = $salario * 0.09;
        $afp = $salario * 0.07;

        if ($salario>472) {
            $renta = $salario * 0.1;
        }
        $salarioneto = $salario - ($isss + $afp + $renta);
    }
      
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header class="container">
        <h2>Formulario de Descuento</h2>
    </header>
    <main class="container">
    <section style="background-color: #f9f9f9;">
        <form class="row g-3" method="POST" action="evaluacion.php">
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre de Empleado</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre del empleado">
  </div>
  <div class="col-md-6">
    <label for="apellido" class="form-label">Apellido de Empleado</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Escriba el apellido del empleado" required>
  </div>
  
  <div class="col-md-2">
    <label for="salario" class="form-label">Salario de Empleado</label>
    <input type="text" class="form-control" name="salario" id="salario" placeholder="$0.00">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="enviar">Calcular</button>
  </div>
</form>
<div class="alert alert-primary" role="alert">
  <strong>
    Nombre de Empleado
  </strong>
  <?php echo $nombre?>
  <br>
  <strong>
    Apellido de Empleado
  </strong>
  <?php echo $apellido;?>
  <br>
  <strong>
    Salario de Empleado: $
  </strong>
  <?php echo $salario;?>
  <br>
  <strong>
    ISSS: $
  </strong>
  <?php echo $isss;?>
  <br>
  <strong>
    AFP: $
  </strong>
  <?php echo $afp;?>
  <br>
  <strong>
    RENTA: $
  </strong>
  <?php echo $renta;?>
  <br>
  <h3>
  <strong>
    Total a Pagar: $
  </strong>
  <?php echo $salarioneto;?>
  </h3>
</div>
    </main>
</body>
</html>