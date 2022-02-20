<?php
    $codigo=$_GET['cod'];
    $productos=simplexml_load_file('productos.xml');
    $indice=0;
    $i=0;
    $dir="img/";
    foreach($productos->producto as $row){
        if($row->codigo==$codigo)
        {
          array_map('unlink', glob("{$dir}". $row->img));
            $indice=$i;
            break;
        }
        $i++;
    }
    unset($productos->producto[$indice]);
    file_put_contents('productos.xml',$productos->asXML());
    header('location:TiendaAdmin.php');
?>
