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

    $.ajax({
    type: 'POST',
    url: 'controlador/registrarUsuario.php',
    data:{'Nombre':Nombre,'correo':correo,'cedula':cedula,'ocupacion':ocupacion,'telefono':telefono,'clave':clave,'departamento':departamento,'ciudad':ciudad},
            success: 
                function(respuesta) {              
                alert(respuesta);
     }
  });
   alert("jsus");
}