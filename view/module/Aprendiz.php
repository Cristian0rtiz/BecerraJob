
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="fa fa-users">
        Aprendiz
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
        <li><a href="#">Aprendiz</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <form method="post" id="frmAprendiz">
            <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtA_Nombre" name="txtA_Nombre">
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha de Nacimiento</span>
                        <input type="date" class="form-control" id="txtA_FeNac" name="txtA_FeNac">
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                <div class="input-group">
                    <span class="input-group-addon">Sexo</span>
                      <select class ="form-control" id="txtA_Sex" name="txtA_Sex" aria-label=".form-select-lg example" required="required">
                        <option selected>Sexo</option>
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                        <option value="3">No-binario</option>
                      </select>
                </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <!-- <div class="">Ciudad -->
                    <div class="input-group">
                      <span class="input-group-addon">Ciudad</span>
                        <select class="form-control" id="txtA_Ciu" name="txtA_Ciu" aria-label=".form-select-lg example">
                          <option selected>Ciudad</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- ./col -->
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

                <button class="btn btn-app" onclick="validateA(event)">
                    <i class="fa fa-save"></i> Guardar
                </button>
                <button class="btn btn-app" onclick="getGeneraReporte(event)">
                    <i class="fa fa-print"></i> Reporte
                </button>
            </div>
            <!-- /.box-footer-->
        </form>
        <?php
          if (isset($_POST['txtA_Nombre'])){
            $objCtrlAprendiz = new AprendizController();
            $objCtrlAprendiz -> setInsertAprendiz(
              $_POST['txtA_Nombre'],
              $_POST['txtA_FeNac'],
              $_POST['txtA_Sex'],
              $_POST['txtA_Ciu']
            );
          }
        ?>
      </div>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <table id="users" class="table table-dark table-striped table-hover">
              <thead>
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Fecha de Nacimiento</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form method="post">
                <?php
                  $objCtrlAprendizAll = new AprendizController();
                  if (gettype($objCtrlAprendizAll -> getSearchAllAprendiz()) == 'boolean'){
                    echo '
                    <tr>
                      <td colspan="5"> no hay datos que mostrar </td>
                    </tr>';
                  }else{

                    foreach ($objCtrlAprendizAll -> getSearchAllAprendiz() as $key => $value) {
                      echo '
                      <tr>
                        <td>'.$value["codigo"].'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["fechaNacimiento"].'</td>
                        <td>'.$value["sexo"].'</td>
                        <td>'.$value["ciudad"].'</td>
                        <td class="text-center">
                          <button class="btn btn-social-icon bg-yellow" onclick="getDataAp(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button class="btn btn-social-icon btn-google"  onClick="eraseA(this.parentElement.parentElement)">
                            <i class="fa fa-trash"></i>
                          </button>
                        </td>
                      </tr>';
                    }//FIN FOREACH
                  }//FIN IF
                ?>
                </form>
              </tbody>
            </table>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
        Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg bg-info">
        <h4 class="modal-title">Modificar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" id="frmAprendizModificar">
          <input type="hidden" name="txtCodigoAM" id="txtCodigoAM">
          <div class="box-body">
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" class="form-control" id="txtA_NombreM" name="txtA_NombreM">
                        <span class="input-group-addon">N</span>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Fecha de Nacimiento</span>
                        <input type="text" class="form-control" id="txtA_FeNacM" name="txtA_FeNac">
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Sexo</span>
                        <input type="text" class="form-control" id="txtA_SexM" name="txtA_SexM">
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                <!-- texto box -->
                    <div class="input-group">
                        <span class="input-group-addon">Ciudad</span>
                        <input type="text" class="form-control" id="txtA_CiuM" name="txtA_CiuM" >
                    </div>
                </div>
                <!-- ./col -->
            </div>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <div>
          <button class="btn btn-app float-left" onclick="validateModifyA(event)">
              <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['txtA_NombreM'])){
              $objCtrlAprendiz = new AprendizController();
              $objCtrlAprendiz -> setUpdateAprendiz(
                $_POST['txtCodigoAM'],
                $_POST['txtA_NombreM'],
                $_POST['txtA_FeNacM'],
                $_POST['txtA_SexM'],
                $_POST['txtA_CiuM']
              );
            }
          ?>
          <button class="btn btn-app" data-dismiss="modal">
              <i class="fa fa-close"></i> Salir
          </button>
        </div>
      </div>

    </div>
  </div>
</div>