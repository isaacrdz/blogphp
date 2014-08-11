<?
	session_start();
    mysql_connect('localhost','zackblog','root') or die('Sin Conexion');
    mysql_select_db('blogphp');

  


    function quitar($str)
    {
    	$no_permitidos= array("'","\"","\\", "OR", "SELECT", "*", "FROM", "=", ">","<");
    	return str_replace($no_permitidos,"",$str);
    }
?>      
