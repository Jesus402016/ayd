<?php
        require_once("otros/encabezado.php");
        session_start();
    if(isset($_SESSION["id"])){?>
       <?php
       require_once("otros/navUsuario.php");
        ?>

        <meta charset="UTF-8">
        <title>Lotes</title>
        <!--CSS-->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
        <!--Javascript-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/operaciones.js"></script>

        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        </script>


        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Administracion de lotes<small>.</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">

            <article class="tile" data-toggle="modal" data-target="#modalLote" type="submit">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-pin-drop"></i></div>
                <div class="tile-name all-tittles">Registrar Lote</div>
                <div class="tile-num full-reset">1</div>
            </article>




            <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h1>Lotes</h1>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <table id="ejemploLote" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>finca</th>
                        <th>idLote</th>
                        <th>nombre</th>
                        <th>medida</th>
                        <th>ubicacion</th>
                        <th>fecha</th>
                        <th>estado fenologico </th>
                        <th>acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>finca</th>
                      <th>idLote</th>
                      <th>nombre</th>
                      <th>medida</th>
                      <th>ubicacion</th>
                      <th>fecha</th>
                      <th>estado fenologico </th>
                      <th>acciones</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
      </div>



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

        <!-- modal Registrar Lote-->
        <div class="modal fade" id="modalLote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
       <div class="modal-content">
         <script>setTimeout ("ListarFinca('<?php echo $_SESSION['id']?>')", 5);</script>
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Lote</h4>
         </div>
         <div class="modal-body">
           <form>



              <div class="form-group">
                        <p>Nombre:</p>
                        <input type="text" class="form-control" id="nombre">
                         <span class="input-group-btn"></span>
               </div>

               <div class="form-group">
                         <p>Medida:</p>
                         <input type="text" class="form-control" id="medida" >
                          <span class="input-group-btn"></span>
                </div>

                <div class="form-group">
                          <p>Fecha:</p>
                          <input type="date"  class="form-control" name="fecha"  id="fecha" required="">
                          <span class="input-group-btn"></span>
                 </div>

                <div class="form-group">
                         <p>Finca:</p>
<<<<<<< HEAD

                         <select class="form-control" id="finca">
=======
                         
                         <select class="form-control"  id="finca">
>>>>>>> de8ea11bdfd548fe90ba88fd07c569b35568951c
                         </select>
                </div>
               <div class="form-group">
                        <p>Fase fenologica:</p>
                        <select class="form-control" id="estadoF">
                           <option>Productiva</option>

                        </select>
               </div>


             </form>
              </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
           <a type="button" class="btn btn-primary" onclick="registrarLote();" data-dismiss="modal">Guardar</a>
         </div>

      <!--termina modal Registrar Lote--></div>
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

</html>
<?php
}else{
	header("location: index.php");
}
?>
