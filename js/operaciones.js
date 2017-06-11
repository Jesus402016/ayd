function registrarFinca(){
//creamos los datos
document.location.href = document.location.href;
var nombre=document.getElementById("nombre").value;
var departamento=document.getElementById("depart").value;
var ciudad=document.getElementById("ciudad").value;

if (nombre!= ""){
  $.ajax({
  type: 'POST',
  url: 'controlador/registrarFinca.php',
  data:{'nombre':nombre,'departamento':departamento,'ciudad':ciudad},
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



$(document).ready(function() {
	$('#ejemploLote').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "controlador/listarLotePorUsuarioTabla.php",
        	"type": "POST"
		},
		"columns": [
			{ "data": "finca" },
			{ "data": "idLote" },
			{ "data": "lote" },
			{ "data": "medida" },
			{ "data": "ubicacion" },
			{ "data": "fecha" },
			{ "data": "estadofenologico" },
			{ "data": "acciones" }

			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="15">15</option>'+
		        '<option value="20">20</option>'+
		        '<option value="25">25</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});


$(document).ready(function() {
	$('#ejemploUsuario').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "controlador/listarUsuarios.php",
        	"type": "POST"
		},
		"columns": [
			{ "data": "nombre" },
			{ "data": "cedula" },
			{ "data": "correo" },
			{ "data": "ocupacion" },
			{ "data": "telefono" },
			{ "data": "ciudad" },
			{ "data": "fincas" },
			{ "data": "lotes" },
			{ "data": "acciones" }

			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="15">15</option>'+
		        '<option value="20">20</option>'+
		        '<option value="25">25</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});


$(document).ready(function() {
	$('#ejemplo').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "controlador/listarFincaPorUsuarioTabla.php",
        	"type": "POST"
		},
		"columns": [
			{ "data": "propietario" },
			{ "data": "finca" },
			{ "data": "Ciudad" },
			{ "data": "departamento" },
		  { "data": "lotes" },
			{ "data": "acciones" }

			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="15">15</option>'+
		        '<option value="20">20</option>'+
		        '<option value="25">25</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});



$(document).ready(function() {
	$('#ejemploFertilizante').DataTable( {
		"bDeferRender": true,
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "controlador/listarFertilizantesUsuario.php",
        	"type": "POST"
		},
		"columns": [
			{ "data": "nombre" },
			{ "data": "estado" },
			{ "data": "funcion" },
			{ "data": "clasificacion" },
		  { "data": "N" },
			{ "data": "P" },
		  { "data": "K" },
			{ "data": "S" },
			{ "data": "Zn" },
		  { "data": "Mn" },
			{ "data": "acciones" }

			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		        '<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="15">15</option>'+
		        '<option value="20">20</option>'+
		        '<option value="25">25</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});








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
if(Nombre != "" && correo != "" && cedula != "" && ocupacion !="" && telefono !="" && clave != ""){
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




function editarFinca(){
//creamos los datos
document.location.href = document.location.href;
var Nombre=document.getElementById("nombreF").value;

if (Nombre!= ""){
  $.ajax({
  type: 'POST',
  url: 'controlador/editarFinca.php',
  data:{'Nombre':Nombre},
          success:
              function(respuesta) {
              alert(respuesta);

   }
  });
}
else{
  alert("para editar una finca debe de ingresar un nombre ");
}
}

function registrarLote(){

//creamos los datos
document.location.href = document.location.href;
var nombre=document.getElementById("nombre").value;
var medida=document.getElementById("medida").value;
var fecha=document.getElementById("fecha").value;
var finca=document.getElementById("finca").value;
var estadoF=document.getElementById("estadoF").value;

if (nombre!=""){
  $.ajax({
  type:'POST',
  url:'controlador/registrarLote.php',
  data:{'nombre':nombre,'medida':medida,'fecha':fecha,'finca':finca,'estadoF':estadoF},
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
