
        <div class="left_content">
            
<?
$id=intval(quitar($_GET['n']));


$sql=mysql_query("SELECT * FROM post WHERE id=$id");
$numero = mysql_num_rows($sql);
if ($numero==0) {
    echo "<center>No se ha encontrado el post.</center>";
}else{

$row=mysql_fetch_array($sql);

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
                    <p class="details"><? echo $row['contenido']; ?></p>
                    <hr>
                       Etiquetas:
                    <?
                    $etiq = $row['etiquetas'];
                    $sql_et = mysql_query("SELECT id, nombre FROM etiquetas WHERE id ='$etiq'");
                    $e = mysql_fetch_array($sql_et);
                    echo $e['nombre'];
                    ?>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>        
            <div class="clear"></div>
            <!-- comentarios -->
            <div class="title">
                <span class="title_icon"><img src="images/bullet1.gif" alt="" title="" />
                </span>Comentarios</div>
            <div class="clear"></div>


            <?

              $sql = mysql_query("SELECT * FROM comentarios WHERE post = $id ");
              if(mysql_num_rows($sql)== 0){
                echo "<center>No hay comentarios </center> ";
              }
              while($row = mysql_fetch_array($sql)){


            ?>
                <div class="feat_prod_box_comment">
                    <div class="comment-de">
                       <b> <? echo $row['de'] ?> </b> el <a href="#"> <? echo $row['fecha'] ?></a>
                    </div>
                    <div class="comentario"> <? echo $row['comentario'] ?></div>
                </div>
            <?
             }
            ?>
<?
}
?>
          <div class="clear"></div>
        </div><!--end of left content-->