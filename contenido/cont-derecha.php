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
              <div class="etiqueta"><a href="#">Etiqueta número 1 (45)</a></div>
              <div class="etiqueta"><a href="#">Etiquet 2 (21)</a></div>
              <div class="etiqueta"><a href="#">Etiquet 3 (89)</a></div>
              <div class="etiqueta"><a href="#">Etiquet 4 (12)</a></div>
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