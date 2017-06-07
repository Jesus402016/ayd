
      <?php
        require_once("otros/encabezado.php");
        session_start();
    if(isset($_SESSION["id"])){?>
     <?php
       require_once("otros/navUsuario.php");
        ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Nuevo Analisis<small></small></h1>
            </div>
        </div>
        
        <div class="container-fluid">
            <form autocomplete="off">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Nuevo Analisis de Suelo</div>
                    <div class="row">
                          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <legend><strong>Ingresar Informacion</strong></legend><br>
                                <!--Seleccion de Finca-->
                                <div class="form-group">
                                 <span>Seleccionar Finca</span>
                                  <div class="col-lg-10" id="select-finca">
                                
                                  <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                  <option>cow</option>
                                  <option data-subtext="option subtext">bull</option>
                                  <option class="get-class" disabled>ox</option>
                                  <optgroup label="test" data-subtext="optgroup subtext">
                                  <option>ASD</option>
                                  <option selected>Bla</option>
                                  <option>Ble</option>
                                 </optgroup>
                                 </select>
                                </div>
                             </div>
                             <!--cierre Finca-->
                              <!--Seleccion de Lote-->
                             <div class="form-group">
                                 <span>Seleccionar Lote</span>
                                  <div class="col-lg-10">
                                  <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
                                  <option>cow</option>
                                  <option data-subtext="option subtext">bull</option>
                                  <option class="get-class" disabled>ox</option>
                                  <optgroup label="test" data-subtext="optgroup subtext">
                                  <option>ASD</option>
                                  <option selected>Bla</option>
                                  <option>Ble</option>
                                 </optgroup>
                                 </select>
                                </div>
                             </div>                       
                        
                            <!--cierre lote-->
            <div class="container-fluid">
            <h2 class="text-center all-tittles">Ingresar Analisis</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 10%;">Nitrogeno(N)</div>
                        <div class="div-table-cell" style="width: 10%;">Fosforo(P)</div>
                        <div class="div-table-cell" style="width: 10%;">Potasio(K)</div>
                        <div class="div-table-cell" style="width: 10%;">Magnesio(Mg)</div>
                        <div class="div-table-cell" style="width: 10%;">Zinc(Zn)</div>
                        
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;"></div>
                        <div class="div-table-cell" style="width: 10%;"><input class="form-control"></div>
                        <div class="div-table-cell" style="width: 10%;"><input class="form-control"></div>
                        <div class="div-table-cell" style="width: 10%;"><input class="form-control"></div>
                        <div class="div-table-cell" style="width: 10%;"><input class="form-control"></div>
                        <div class="div-table-cell" style="width: 10%;"><input class="form-control"></div>
                        
                    </div>
                </div>
            </div>
        </div>
                </div>
                </div>
                <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>
            </form>
        </div>
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
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quam dicta et, ipsum quo. Est saepe deserunt, adipisci eos id cum, ducimus rem, dolores enim laudantium eum repudiandae temporibus sapiente.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Carlos Alfaro <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2016 Carlos Alfaro</div>
        </footer>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</html>
<?php
}else{
  header("location: index.php");
}
?>
