<!--
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<?php



session_start();

if(isset($_SESSION["administrador"])){

	header("location: inicioAdmin.php");

}
else if(isset($_SESSION["usuario"]))
{

	header("location: inicioUsuario.php");

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script> window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>') </script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body class="full-cover-background" style="background-image:url(assets/img/fondo.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form  action="controlador/validarLoginUsuario.php" method ="post">
            <div class="group-material-login">
              <input type="text" class="material-login-control" name="usuario" id = "Usuario" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Usuario</label>
            </div><br>
            <div class="group-material-login">
              <input type="password" class="material-login-control" name="password" id = "Password" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div><br>
            <div class="group-material-login">

              <select class="form-control" id="rol" name="rol">

                  <option value="1">Usuario</option>
                  <option value="2">Administrador</option>


              </select>
            </div><br>
            <button class="btn-login" type="submit" >Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>

        </form>
        <!--botton registrar nuevo usuario-->
        <button class="btn-login-left" data-toggle="modal" data-target="#modalRegistrar" type="submit">Registrarse &nbsp; <i class="zmdi zmdi-arrow-"></i></button>
    </div>

     <!-- modal Registrar-->
     <div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Agregar Cliente</h4>
      </div>
      <div class="modal-body" >
        <form  id="FormUsuario">
           <div class="form-group">
                     <p>Nombre:</p>
                     <input type="text" class="form-control" id="nombre" required="">
                      <span class="input-group-btn"></span>
            </div>

            <div class="form-group">
                     <p>Cedula:</p>
                     <input type="text" class="form-control" id="cedula" required="">
                      <span class="input-group-btn"></span>
            </div>

            <div class="form-group">
                     <p>Correo:</p>
                     <input type="text" class="form-control" id="correo" required="">
                      <span class="input-group-btn"></span>
            </div>
            <div class="form-group">
                     <p>Telefono:</p>
                     <input type="text" class="form-control" id="telefono" required="">
                      <span class="input-group-btn"></span>
            </div>
            <div class="form-group">
                     <p>Ocupacion:</p>
                     <input type="text" class="form-control" id="ocupacion" required="">
                      <span class="input-group-btn"></span>
            </div>
             <div class="form-group">
                     <p>Contraseña:</p>
                     <input type="text" class="form-control" id="clave" required="">
                      <span class="input-group-btn"></span>
            </div>

             <div class="form-group" >
                     <p>Departamento:</p>
                     <select class="form-control" id="depart">
                        <option>Cesar</option>
                        <option>Guajira</option>
                        <option>N.te de santander</option>
                     </select>
            </div>

            <div class="form-group" >
                     <p>Ciudad:</p>
                     <select class="form-control" id="ciudad">
                        <option>Armenia</option>
                        <option>Cucuta</option>
                        <option>Valledupar</option>
                     </select>
            </div>

         <!---<button type="submit" class="btn btn-default" data-dismiss="modal" onclick="registrarUsuario();">Close</button>-->
          </form>
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <a type="button" class="btn btn-primary" onclick="registrarUsuario();" data-dismiss="modal">Guardar</a>
      </div>

<!--termina modal Registrar--></div>


</body>
<script src="js/operaciones.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</html>
