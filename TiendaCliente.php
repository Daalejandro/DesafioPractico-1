<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TEXTIL EXPORT</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <h1 class="page-header text-center"><b>PRODUCTOS TEXTIL EXPORT</b></h1>
    <div style="background-color: #79C99E;"  class="row">
        <div  style="text-align:center;" class="col-md-8 ">
            <table class="table table-bordered " style=" margin-right: 25%; margin-left: 25%; margin-top:20px;">
                <thead >
                    <th class="text-center"  ><b>Imagen</b></th>
                    <th class="text-center" ><b>Nombres</b></th>

                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file('productos.xml');
                    foreach($productos->producto as $row){

                    ?>

                        <tr>
                            <td style="background-color: #fff"><img  class="rounded" src="img/<?=$row->img?>" alt=""  height="200" width="200"></td>
                            <td style="background-color: #fff"><?=$row->nombre?></td>
                            <td style="background-color: #fff">
                                <a  href=#details_<?=$row->codigo?> data-toggle="modal" class="btn btn-info" >Ver detalles</a>
                            </td>
                        </tr>
                    <?php
                        include('detalles_modal.php');
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
<div class="container-footer" style="width:100%">
  <p class="text-center "><b>&#174; JOSSELINE Y DANIEL</b></p>
</div>
</body>
</html>
