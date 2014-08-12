
    <div class="left_content">
    <img src="" alt="">
        	
    <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Todos los post</div>
<?
    $sql=mysql_query('SELECT * FROM post ORDER BY id DESC');
    $n = mysql_num_rows($sql);
    $sql=mysql_query('SELECT * FROM post ORDER BY id DESC');
    $pag = intval(quitar($_GET['pag'])) ;
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
                    <p class="details"><? echo  substr($row['contenido'],0, 200)."..."; ?></p>
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
            <div class="clear"></div>
            </div>      
<?
    }
?>
            <ul class="pagination">
                <li class="ant"><a href="#">Anterior</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="ant"><a href="#">Siguiente</a></li>
             </ul>
          <div class="clear"></div>
        </div><!--end of left content-->

