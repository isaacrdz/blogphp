<?
include 'comunes/head.php';
?>
<body>

<div id="wrap">
<?
include 'comunes/header.php';
?>
     <div class="center_content">
<?
if (isset($_GET['n'])) {
	include 'contenido/post_solo.php';
	
}else{

	include 'contenido/cont-izquierda.php';
}
include 'contenido/cont-derecha.php';
?>
        

        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              

 <?
include 'comunes/footer.php';
 ?>

</div>

</body>
</html>