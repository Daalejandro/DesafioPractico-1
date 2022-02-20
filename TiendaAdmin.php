<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Administración de textil export</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body >
<div class="container">
    <h1 class="page-header text-center"><b>Administración de Textil Export</b></h1>
    <div style="background-color: #79C99E" class="row">
        <div class="col-sm-12 col-sm-offset-0">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar Producto</a>
          <a type = "button" value = "¡Regresar!" onclick = "history.back ()" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Regresar </a>

            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th class="text-center" ><b>Código</b></th>
                    <th class="text-center" ><b>Nombre</b></th>
                    <th class="text-center"  ><b>Descripción</b></th>
                    <th class="text-center"  ><b>Imagen</b></th>
                    <th class="text-center"  ><b>Categoria</b></th>
                    <th class="text-center" ><b>Precio</b></th>
                    <th class="text-center"  ><b>Existencias</b></th>
                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file('productos.xml');
                    foreach($productos->producto as $row){

                    ?>

                        <tr>
                            <td style="background-color: #fff"><?=$row->codigo?></td>
                            <td style="background-color: #fff"><?=$row->nombre?></td>
                            <td style="background-color: #fff"><?=$row->descripcion?></td>
                            <td style="background-color: #fff"><img src="img/<?=$row->img?>" alt=""  height="200" width="200"></td>
                            <td style="background-color: #fff"><?=$row->categoria?></td>
                            <td style="background-color: #fff"><?=$row->precio?></td>
                            <td style="background-color: #fff"><?=$row->existencias?></td>
                            <td style="background-color: #fff" class="col-sm-2">
                                <a  href="#edit_<?=$row->codigo?>" data-toggle="modal" class="btn btn-success">Editar</a>
                                <a href="#delete_<?=$row->codigo?>" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                        include('borrar_modal.php');
                        include('Editar_modal.php');
                    ?>
                    <?php
                        }
                    ?>


                </tbody>
            </table>


        </div>
    </div>
</div>
<?php include('nueva_modal.php'); ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--ALERTAS-->
<?php
    if(isset($_GET['exito'])){
?>
<script>
    alertify.success('Producto agregado correctamente!');
</script>
<?php
    }
  if (isset($_GET['error']))
  {

?>
<script>
    alertify.error('El archivo no es una imagen!');
</script>
<?php

}

if (isset($_GET['errorCod']))
{

 ?>
 <script>
     alertify.error('El Codigo debe llevar el formato PROD seguido de 4 digitos!');
 </script>
 <?php

 }

 if (isset($_GET['exitoEdit']))
 {
  ?>
  <script>
      alertify.success('Se edito correctamente!');
  </script>
  <?php
    }

    if (isset($_GET['codexis']))
    {
   ?>
   <script>
       alertify.error('El codigo ya existe');
   </script>
   <?php
    }
   ?>

<p class="text-center"><b>&#174; JOSSELINE Y DANIEL</b></p>
</body>
</html>
