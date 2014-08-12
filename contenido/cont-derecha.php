<script type="text/javascript">
function SINO(cual) {
   var elElemento=document.getElementById(cual);
   if(elElemento.style.display == '') {
      elElemento.style.display = 'none';
   } else {
      elElemento.style.display = '';
   }
}
</script> 
        <div class="right_content">
          <div class="anuncio">
            <h3>Titulo</h3>
            <hr>
            <p>Este es un anuncio</p>
          </div>

          <div class="anuncio">
            <h3>Etiquetas</h3>
            <hr>
            <div>
            <?
              $sql_mostrar_etiquetas = mysql_query("SELECT * FROM etiquetas");
              while($row = mysql_fetch_array($sql_mostrar_etiquetas)){    
              $n=$row['id'];
              $num = mysql_query("SELECT id FROM post WHERE etiquetas = $n ");
                echo'<div class="etiqueta"><a href="post.php?tag='.$row['id'].'">'.$row['nombre']."(".mysql_num_rows($num).")".'</a></div>';
              }
            ?>
              
        
            </div>
          </div>
          <div class="anuncio">
            <h3>Titulo</h3>
            <hr>

            <div>
            <?
              for ($i=date("Y"); $i >=2010; $i--) { 

            ?>
              <h4 style="cursor:pointer;" onclick="SINO(<? echo $i;  ?>);">► <? echo $i;  ?></h4>
              <div style="display:none;" id="<? echo $i;  ?>">
                <ol>
            <?
            $sql = mysql_query("SELECT titulo, anio, id  FROM post WHERE anio = $i");
            while ($row=mysql_fetch_array($sql)){            
              ?>
              <li>   <a href="post.php?n=<?echo $row['id'] ;?>"> <? echo $row["titulo"]; ?></a>   </li>
              <?
                 }
              ?>
                </ol>
              </div>

              <?
                 }
              ?>
            </div>
            </div>
              
        
        </div><!--end of right content-->