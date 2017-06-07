<?php
        require_once("otros/encabezado.php");
    ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de Fertelizacion del Cacao<small>Inicio</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">

            <article class="tile" data-toggle="modal" data-target="#modalFinca" type="submit">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-pin-drop"></i></div>
                <div class="tile-name all-tittles">Registrar Finca</div>
                <div class="tile-num full-reset">1</div>
            </article>
            <article class="tile" data-toggle="modal" data-target="#modalLote" type="submit">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-nature"></i></div>
                <div class="tile-name all-tittles">Registrar Lote</div>
                <div class="tile-num full-reset">2</div>
            </article>
            <article class="tile"data-toggle="modal" data-target="#modalFertilizante" type="submit">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-flower-alt"></i></div>
                <div class="tile-name all-tittles">Registrar Fertilizante</div>
                <div class="tile-num full-reset">3</div>
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
                     <input type="text" class="form-control">
                      <span class="input-group-btn"></span>
            </div>


             <div class="form-group">
                     <p>Departamento:</p>
                     <select class="form-control">
                        <option>Cesar</option>
                        <option>Guajira</option>
                        <option>N.te de santander</option>
                     </select>
            </div>

            <div class="form-group">
                     <p>Ciudad:</p>
                     <select class="form-control">
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

  <!-- modal Registrar Lote-->
  <div class="modal fade" id="modalLote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Lote</h4>
   </div>
   <div class="modal-body">
     <form>

       <div class="form-group">
                <p>Finca:</p>
                <select class="form-control">
                   <option>Productiva</option>

                </select>
       </div>

        <div class="form-group">
                  <p>Nombre:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>


         <div class="form-group">
                  <p>Fase fenologica:</p>
                  <select class="form-control">
                     <option>Productiva</option>

                  </select>
         </div>


       </form>
        </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
     <a type="button" class="btn btn-primary" onclick="mostrarCliente();" data-dismiss="modal">Guardar</a>
   </div>

<!--termina modal Registrar Lote--></div>
</div>
</div>

  <!-- modal Registrar fertilizante-->
  <div class="modal fade" id="modalFertilizante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="exampleModalLabel" style="color:black;">Registrar Fertilizante</h4>
   </div>
   <div class="modal-body">
     <form>
        <div class="form-group">
                  <p>Nombre:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>

         <div class="form-group">
                  <p>Cedula:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>

         <div class="form-group">
                  <p>Correo:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>
         <div class="form-group">
                  <p>Telefono:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>
         <div class="form-group">
                  <p>Ocupacion:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>
          <div class="form-group">
                  <p>Contraseña:</p>
                  <input type="text" class="form-control">
                   <span class="input-group-btn"></span>
         </div>

          <div class="form-group">
                  <p>Departamento:</p>
                  <select class="form-control">
                     <option>Cesar</option>
                     <option>Guajira</option>
                     <option>N.te de santander</option>
                  </select>
         </div>

         <div class="form-group">
                  <p>Ciudad:</p>
                  <select class="form-control">
                     <option>Armenia</option>
                     <option>Cucuta</option>
                     <option>Valledupar</option>
                  </select>
         </div>


       </form>
        </div>
   <div class="modal-footer">
     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
     <a type="button" class="btn btn-primary" onclick="mostrarCliente();" data-dismiss="modal">Guardar</a>
   </div>
<!--termina modal Registrar Fertilizante--></div>
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
