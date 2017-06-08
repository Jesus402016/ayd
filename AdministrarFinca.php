<?php
        require_once("otros/encabezado.php");
        session_start();
    if(isset($_SESSION["id"])){?>
         <?php
       require_once("otros/navUsuario.php");
        ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Administracion de fincas<small>.</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">

            <article class="tile" data-toggle="modal" data-target="#modalFinca" type="submit">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-pin-drop"></i></div>
                <div class="tile-name all-tittles">Registrar Finca</div>
                <div class="tile-num full-reset">1</div>
            </article>


        </section>

        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>

          <!-- modal RegistrarFinca-->
     <div class="modal fade" id="modalFinca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Finca</h4>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group">
                     <p>Nombre:</p>
                     <input type="text" class="form-control"  id="nombre">
                      <span class="input-group-btn"></span>
            </div>


             <div class="form-group">
                     <p>Departamento:</p>
                     <select class="form-control"  id="depart">
                        <option>Cesar</option>
                        <option>Guajira</option>
                        <option>N.te de santander</option>
                     </select>
            </div>

            <div class="form-group">
                     <p>Ciudad:</p>
                     <select class="form-control"  id="ciudad">
                        <option>Armenia</option>
                        <option>Cucuta</option>
                        <option>Valledupar</option>
                     </select>
            </div>


          </form>
           </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <a type="button" class="btn btn-primary" onclick="registrarFinca();" data-dismiss="modal">Guardar</a>
      </div>

<!--termina modal Registrar Finca--></div>
</div>
</div>



        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            UFPS
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© Desarrollador:2016 Carlos Alfaro</div>
        </footer>
    </div>
</body>

<script src="js/operaciones.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</html>
<?php
}else{
	header("location: index.php");
}
?>
