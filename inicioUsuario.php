 <?php
        require_once("otros/encabezado.php");
        session_start();
    if(isset($_SESSION["id"])){?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de Fertelizacion del Cacao<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido <?php echo $_SESSION["usuario"] ?></small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
          <H3>Bienvenido a la Platafomra</h3>

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
