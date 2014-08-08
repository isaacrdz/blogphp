
        <div class="left_content">
            
<?
$id=$_GET['n'];
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
                    <div class="prod_title"><? echo $row['dia']." de ".$row['mes']." de ".$row['anio']; ?></div>
                    <hr>
                    <a href=""><h2><? echo $row['titulo']; ?></h2></a>
                    <p class="details"><? echo $row['contenido']; ?></p>
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