<?php
	include 'funcionesValidadas.php';
	session_start();
	if(isset($_POST['editar']))
  {
		if (comprobarimagen($_FILES["img"]["name"]))
		{
		$productos = simplexml_load_file('productos.xml');
		$dir="img/";
		foreach($productos->producto as $producto){

			if($producto->codigo == $_POST['codigo'])
      {

				$producto->nombre = $_POST['nombre'];
				$producto->descripcion = $_POST['descripcion'];
				if ($_FILES["img"]["name"]!=null)// si el campo no es bacio se borra y modifica este campo de el xml si no pues se deja igual
				{
				array_map('unlink', glob("{$dir}". $producto->img));
				$producto->img = $_FILES["img"]["name"];
				}
				$producto->categoria = $_POST['categoria'];
				$producto->precio = $_POST['precio'];
				$producto->existencias = $_POST['existencias'];
				break;
			}
		}
		file_put_contents('productos.xml', $productos->asXML());
		subirFotos();
		header('location:TiendaAdmin.php?exitoEdit=1');
	}
	else {
			header('location:TiendaAdmin.php?error=1');
	}

	}
	else{
		$_SESSION['message'] = 'selecciona uno primero';
		header('location:TiendaAdmin.php?errorEdit=1');
	}
?>
