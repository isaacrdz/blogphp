
       	<div class="left_content">

<?

    $tag= intval((quitar($_GET['tag'])));
    $sql=mysql_query("SELECT * FROM post WHERE etiquetas = '$tag'");
    $sql2=mysql_query("SELECT nombre FROM  etiquetas WHERE id=$tag");
    $row=mysql_fetch_array($sql2);
    ?>
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span><?echo $row['nombre']; ?></div>
    <div class="clear"></div>
    <?
    $n = mysql_num_rows($sql);
    if($n==0){
        echo "<center>Sin resultados</center>";
    }else{

    while ($row= mysql_fetch_array($sql)) {
       
    
?>
          
          <div class="feat_prod_box">


                            
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">
                         Escrito por  <strong><? echo $row['autor']; ?></strong> el 
                         <? echo $row ['dia'].' '.$row['mes'].' '.$row['anio']; ?> a las  <? echo $row ['hora']; ?>
                    </div>
                    <hr>
                    <a href=""><h2><? echo $row['titulo']; ?></h2></a>
                    <p class="details"><? echo  $row['contenido']; ?></p>
                    <a href="post.php?n=<?echo $row['id']; ?>" class="more">- Seguir leyendo -</a>
                    <div class="clear"></div>
                    <hr>
                    Etiquetas:
                    <?
                    $etiq = $row['etiquetas'];
                    $sql_et = mysql_query("SELECT id, nombre FROM etiquetas WHERE id ='$etiq'");
                    $e = mysql_fetch_array($sql_et);
                    echo $e['nombre'];
                    ?>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	    
<?
    }
    }
?>
          <div class="clear"></div>
<?
    
?>
        </div><!--end of left content-->