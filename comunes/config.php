<?
	session_start();
    mysql_connect('localhost','zackblog','root') or die('Sin Conexion');
    mysql_select_db('blogphp');

  


    function quitar($str)
	    {
	    	$no_permitidos= array("'","\"","\\", "OR", "SELECT", "*", "FROM", "=", ">","<");
	    	return str_replace($no_permitidos,"",$str);
	    }



    function get_ip()
	    {
	    	if (!empty($_SERVER['HTTP_CLIENT_IP']) ){
	    		return $_SERVER['HTTP_CLIENT_IP'];
	    	}
	    	if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    		return $_SERVER['HTTP_X_FORWARDED_FOR'];

	    	}

	    return $_SERVER['REMOTE_ADDR'];
	    }


	function mes($n)
	{
		if($n=1){ return "Enero"; }
		if($n=2){ return "Febrero"; }
		if($n=3){ return "Marzo"; }
		if($n=4){ return "Abril"; }
		if($n=5){ return "Mayo"; }
		if($n=6){ return "Junio"; }
		if($n=7){ return "Julio"; }
		if($n=8){ return "Agosto"; }
		if($n=9){ return "Septiembre"; }
		if($n=10){ return "Octubre"; }
		if($n=11){ return "Noviembre"; }
		return "Diciembre";
	}
?>      
