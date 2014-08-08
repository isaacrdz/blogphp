
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Todos los post</div>
<?
    $sql=mysql_query('SELECT * FROM post ORDER BY id DESC');
    while ($row= mysql_fetch_array($sql)) {
        # code...
    
?>
        	<div class="feat_prod_box">
                            
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><? echo $row ['dia'].' '.$row['mes'].' '.$row['ano']; ?></div>
                    <hr>
                    <a href=""><h2><? echo $row['titulo']; ?></h2></a>
                    <p class="details"><? echo  $row['contenido']; ?></p>
                    <a href="post.php?n=<?echo $row['id']; ?>" class="more">- Seguir leyendo -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	    
<?
    }
?>
          <div class="clear"></div>
        </div><!--end of left content-->