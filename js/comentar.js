// creamos una variable donde vamos a almacenar los datos de la conexion
var myRequest = getXMLHTTPRequest();
// creamos la funcion que nos validara el navegador
function getXMLHTTPRequest(){
var request = false;
if(window.XMLHttpRequest)
{
  request = new XMLHttpRequest();
} else {
  if(window.ActiveXObject)
  {
    try
    {
      request = new ActiveXObject("Msml2.XMLHTTP");
    }
    catch(err1)
    {
      try
      {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(err2)
      {
        request = false;
      }
   }
  }
}
return request;
}
// creamos la funcion que validara nuestro formulario
function enviar_comentario() {
  var user = document.getElementById("usuario").value;
  var email = document.getElementById("email").value;
  var comentario = document.getElementById("comentario").value;
  var post = document.getElementById("post").value;
  var capt = document.getElementById("capt").value;

  var url = "action/crear_comentario.php?user="+user+"&email="+email+"&comentario="+comentario+"&post="+post+"&capt="+capt;
  myRequest.open("GET", url, true);
  myRequest.onreadystatechange = respuestaAJAX;
  myRequest.send(null);
}


function respuestaAJAX() {
    if(myRequest.readyState == 4) {
           if(myRequest.status == 200) {
             document.getElementById('respuesta').innerHTML= myRequest.responseText;
        } else {
            document.getElementById('respuesta').innerHTML= myRequest.status;
        }
    }else{
      document.getElementById('respuesta').innerHTML="<img src='images/loading.gif' width='16' />";
    }
 
} 