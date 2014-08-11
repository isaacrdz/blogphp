<?
	
	require '../comunes/config.php';
	if(!isset($_GET['user'])or !isset($_GET['email']) or !isset($_GET['comentario']) or !isset($_GET['post']) or !isset($_GET['capt'] )) {
		echo "Error inesperado";
	}elseif (strlen($_GET['user'])< 5 or strlen($_GET['user'])>200 ){
		echo "Error usuario no valido";

	}elseif (strlen($_GET['comentario'])< 5 or strlen($_GET['comentario'])>200 ){
		echo "Error comentario no valido";

	}elseif(intval($_GET['capt']) !=$_SESSION['a'] + $_SESSION['b'] ){
		echo "Error de suma";
	}else{
		$user = quitar($_GET['user']);
		$email = quitar($_GET['email']);
		$post = quitar($_GET['post']);
		$comentario = quitar($_GET['comentario']);
		$fecha = date("d")." de ".date("m")." de ".date("y");
 		$sql = mysql_query("
			INSERT INTO `comentarios`( `de`, `comentario`, `fecha`, `email`, `activo`, `ip`, `post`) 
			VALUES ('$user','$comentario','$fecha','$email','1','111.111.11.1','$post')
			");
 	if($sql){
 		echo "Gracias por su comentario";
 		$_SESSION['a'] = rand(5,20);
 		$_SESSION['b'] = rand(5,20);
 	}else{
 		echo "Error con el servidor, intente mas tarde";
 	}
 	//echo mysql_error();
	}
?>


