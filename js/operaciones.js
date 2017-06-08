 function registrarUsuario(){
          //Creamos los datos a enviar con el formulario
var Nombre=document.getElementById("nombre").value;
var correo=document.getElementById("correo").value;
var cedula=document.getElementById("cedula").value;
var ocupacion=document.getElementById("ocupacion").value;
var telefono=document.getElementById("telefono").value;
var clave=document.getElementById("clave").value;
var departamento=document.getElementById("depart").value;
var ciudad=document.getElementById("ciudad").value;
if(Nombre != "" || correo != "" || cedula != "" || ocupacion !="" || telefono !="" || clave != ""){
  if(!(isNaN(Nombre))){
  alert("El nombre no debe contener valores numericos");
  }

  else if(isNaN(cedula)){
  alert("la cedula no debe contener letras");
  }

  else if(isNaN(telefono)){
  alert("el telefono no debe contener letras");
  }
  else{
  $.ajax({
  type: 'POST',
  url: 'controlador/registrarUsuario.php',
  data:{'Nombre':Nombre,'correo':correo,'cedula':cedula,'ocupacion':ocupacion,'telefono':telefono,'clave':clave,'departamento':departamento,'ciudad':ciudad},
          success:
              function(respuesta) {
              alert(respuesta);
   }
  });
}
}else{
  alert("para registrar un usuario todos los campos deben ser rellenados");
}


}

function registrarFinca(){
//creamos los datos
var Nombre=document.getElementById("nombre").value;
var departamento=document.getElementById("depart").value;
var ciudad=document.getElementById("ciudad").value;

if (Nombre!= ""){
  $.ajax({
  type: 'POST',
  url: 'controlador/registrarFinca.php',
  data:{'Nombre':Nombre,'departamento':departamento,'ciudad':ciudad},
          success:
              function(respuesta) {
              alert(respuesta);
   }
  });
}
else{
  alert("para registrar una finca debe de ingresar un nombre para la misma ");
}
}


function registrarLote(){
//creamos los datos
var nombre=document.getElementById("nombre").value;
var medida=document.getElementById("medida").value;
var fecha=document.getElementById("fecha").value;

if (nombre!=""){
  $.ajax({
  type:'POST',
  url:'controlador/registrarLote.php',
  data:{'nombre':nombre,'medida':medida,'fecha':fecha},
          success:
              function(respuesta) {
              alert(respuesta);
   }
  });
}
else{
  alert("para registrar un lote todos los campos deben ser diligenciados");
}
}


function ListarFinca(id){
//creamos los datos
  $.ajax({
  type: 'POST',
  url: 'controlador/listarFincaPorUsuario.php',
  data:{'id':id},
          success:
              function(respuesta) {
              $('#finca').html(respuesta);
   }
  });
}
