<?php
include 'funcionesValidadas.php';
if (!codigounico($_POST['codigo']))
{


if (comprobarCodigo($_POST['codigo']))
{


if(comprobarimagen($_FILES["img"]["name"]))
{

    $productos=simplexml_load_file('productos.xml');
    $producto=$productos->addChild('producto');
    $producto->addChild('codigo',$_POST['codigo']);
    $producto->addChild('nombre',$_POST['nombre']);
    $producto->addChild('descripcion',$_POST['descripcion']);
    $producto->addChild('img',$_FILES["img"]["name"]);
    $producto->addChild('categoria',$_POST['categoria']);
    $producto->addChild('precio',$_POST['precio']);
    $producto->addChild('existencias',$_POST['existencias']);
    file_put_contents('productos.xml',$productos->asXML());
    subirFotos();
    header('location:TiendaAdmin.php?exito=1');
}
else {

  header('location:TiendaAdmin.php?error=1');

}
}
else
{
  header('location:TiendaAdmin.php?errorCod=1');
}

}
else {
    header('location:TiendaAdmin.php?codexis=1');
}

?>
