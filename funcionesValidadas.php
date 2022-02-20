<?php



function subirFotos()
{
$target_dir = "img/"; //directorio en el que se subira
$target_file = $target_dir . basename($_FILES["img"]["name"]);//se añade el directorio y el nombre del archivo


if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file))
{
        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " Se subio correctamente";

    } else {
        echo "Error al cargar el archivo";
    }

}



 function comprobarimagen($archivo)
 {
 $patron = "/\.(gif|jpe?g|png)$/i";
 $verificado = preg_match($patron, $archivo);
 if ($_FILES["img"]["name"]!=null)//solo comprueba si el campo no esta bacio
 {
   $esimagen = $verificado == true ? true : false;
   return $esimagen;
 }
 else // si el campo es bacio la imagen sera aprobada
 {
    return true;
 }

 }


function comprobarCodigo($codigo)
{
$patron = "/[P]+[R]+[O]+[D]{1}+[0-9]{5}/";
$verificado = preg_match($patron, $codigo);
$escodigo = $verificado == true ? true : false;
return $escodigo;
}


function codigounico($codigo)
{
  	$productos = simplexml_load_file('productos.xml');
    foreach($productos->producto as $producto)
    {
			if($producto->codigo == $codigo)
      {
        return true;
      }
}
}






 ?>
