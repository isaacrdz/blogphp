//Abrimos el Script
<script type="text/javascript">

//Nombramos la función
function valida_envia(){

//Definimos los caracteres permitidos en una dirección de correo electrónico
var regexp = /^[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+$/;

//Validamos un campo o área de texto, por ejemplo el campo nombre
if (document.form.nombre.value.length==0){
alert("Tiene que escribir su nombre")
document.form.nombre.focus()
return 0;
}

//Validamos un campo de texto como numérico, por ejemplo el campo teléfono de 9 dígitos
valor = document.form.telefono.value;
if( !(/^\d{9}$/.test(valor)) ) {
alert("Tiene que escribir un teléfono de 9 dígitos");
document.form.telefono.focus();
return 0;
}

//Validamos un campo de texto como email
if ((regexp.test(document.form.email.value) == 0) || (document.form.email.value.length = 0)){
alert("Introduzca una dirección de email válida");
document.form.email.focus();
return 0;
} else {
var c_email=true;
}

//Validamos un campo de lista/menú, por ejemplo el campo provincia
if (document.form.provincia.selectedIndex==0){
alert("Tiene que seleccionar su provincia")
document.form.provincia.focus()
return 0;
}

//Validamos un campo de tipo checkbox, por ejemplo condiciones
if (document.form.condiciones.checked==0){
alert("Debe aceptar las condiciones")
document.form.condiciones.focus()
return 0;
}

//Si todos los campos han validado correctamente, se envía el formulario
document.form.submit();
}

//Cerramos el Script
</script>