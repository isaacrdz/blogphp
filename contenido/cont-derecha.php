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
              <h4 style="cursor:pointer;" onclick="SINO(2013);">► 2013</h4>
              <div style="display:none;" id="2013">
                <ol>
                  <li>ddkdkf kfkmg</li>
                  <li>kckjf kfjf</li>
                </ol>
              </div>
            </div>
            <div>
              <h4 style="cursor:pointer;" onclick="SINO(2012);">► 2012</h4>
              <div style="display:none;" id="2012">
                <ol>
                  <li>ddkdkf kfkmg</li>
                  <li>kckjf kfjf</li>
                </ol>
              </div>
            </div>
          </div>
        
        </div><!--end of right content-->