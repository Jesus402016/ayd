
      <?php
        require_once("otros/encabezado.php");
    ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Añadir libro</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/logo.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para agregar un analisis de suelo y obtener asi los resultados de los nutrientes faltantes y una recomendacion de fertilizantes para suplirlos
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form autocomplete="off">
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Nuevo Analisis de Suelo</div>
                    <div class="row">
                          <!--<div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <legend><strong>Ingresar Informacion</strong></legend><br>
                            <div class="group-material">
                                <span>Seleccionar Finca</span>
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige la Finca">
                                    <option value="" disabled="" selected="">Selecciona Finca</option>
                                    <option value="categoria">Finca1</option>
                                    <option value="categoria">Finca2</option>
                                    <option value="categoria">Finca3</option>
                                </select>
                            </div>-->
                          <!--lote-->
                         <!-- 
                        <div class="group-material">
                                <span>Seleccionar Lote</span>
                                <select class="tooltips-general material-control" data-toggle="tooltip" data-placement="top" title="Elige Tu Lote">
                                    <option value="" disabled="" selected="">Selecciona Lote</option>
                                    <option value="categoria">Lote1</option>
                                    <option value="categoria">Lote22</option>
                                    <option value="categoria">Lote3</option>
                                </select>
                            </div>-->
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
                        <div class="div-table-cell" style="width: 8%;">Eliminar</div>
                        <div class="div-table-cell" style="width: 8%;">Ver Ficha</div>
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
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-info"><i class="zmdi zmdi-file-text"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
                </div>
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
</html>