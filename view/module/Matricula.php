
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="fa fa-sign-in">
        Matricula
        <small>te matriculas bro</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-sign-in"></i> Home</a></li>
        <li><a href="#">matricula</a></li>
        
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

        <form method="post" id="formMatricula">
            <div class="box-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 26px; padding-left: 26px;">Fecha</span>
                        <input type="date" class="form-control" id="txtDate" name="txtDate">
                        
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 20px; padding-left: 20px;" >Centro</span>
                        <input type="text" class="form-control" id="txtPlace" name="txtPlace">
                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    </div>

                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    
                    </div>
                    
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                        <div class="input-group">
                            <span class="input-group-addon" style="padding-right: 26px; padding-left: 26px;">Costo</i></span>
                            <input type="number" class="form-control" id="txtCost" name="txtCost">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                        </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                        <div class="input-group">
                            <span class="input-group-addon" style="padding-right: 20px; padding-left: 20px;">Estado</i></span>
                            <select  class="form-control" id="txtState" name="txtState">
                              <option value= "activo">activo</option>
                              <option value= "inactivo">inactivo</option> 
                            </select>
                            <span class="input-group-addon"><i class="fa fa-check-circle"></i></span>
                        </div>
                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    
                    </div>
                
                    
                    
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                        <div class="input-group">
                            <span class="input-group-addon" style="padding-right: 13px; padding-left: 15px;">programa</i></span>
                            <input type="number" class="form-control" id="txtProgramn" name="txtProgramn">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                        </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                        <div class="input-group">
                            <span class="input-group-addon" style="padding-right: 18px;">aprendiz</i></span>
                            <input type="number" class="form-control" id="txtStudent" name="txtStudent">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                <!-- /.row -->
                </div>
                <!-- /.box-body -->
                
                <div class="box-footer">
                <button class="btn btn-app"  onclick="validateMatricula(event)">
                  <i class="fa fa-save"></i> guardar
                </button>
                <button class="btn btn-app"  onclick="getGenerarReporteM(event)">
                  <i class="fa fa-print"></i> reporte
                </button>
                </div>
                <!-- /.box-footer-->
        </form>
        <?php

        if (isset($_POST["txtDate"])) {
          
          $objCtrlUser = new MatriculaController();
          $objCtrlUser -> setInsertMatricula(
            $_POST["txtDate"],
            $_POST["txtPlace"],
            $_POST["txtCost"],
            $_POST["txtState"],
            $_POST["txtProgramn"],
            $_POST["txtStudent"]
          );
        }

        ?>
      </div>
      <!-- /.box -->

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
        <div class="box-body">
          <table id="users" class="table table-dark table-striped table-hover">
            <thead>
              <tr>
                <input type="hidden" name="codigoMatricula" id="codigoMatricula">
                <th class="text-center">Code</th>
                <th class="text-center">fecha</th>
                <th class="text-center">centro</th>
                <th class="text-center">costo</th>
                <th class="text-center">estado</th>
                <th class="text-center">programa</th>
                <th class="text-center">aprendiz</th>
                <th class="text-center">actiones</th>
              </tr>
            </thead>
            <tbody>
              <form method="post">
                <?php
                  
                  $objCtrlMatriculaAll = new MatriculaController();
                  $objCtrlMatriculaAll -> getSearchAllMatricula();
                  if (gettype($objCtrlMatriculaAll -> getSearchAllMatricula()) == "boolean"){
                  print '    
                  <td colspan="5">no hay datos por mostrar</td>';
                  }else{

                    foreach($objCtrlMatriculaAll -> getSearchAllMatricula() as $key => $value){
                      print '    
                        <tr>
                          <td>'.$value['codigoMatricula'].'</td>
                          <td>'.$value['fechaMatricula'].'</td>
                          <td>'.$value['nombreCentro'].'</td>
                          <td>'.$value['costo'].'</td>
                          <td>'.$value['estado'].'</td>
                          <td>'.$value['codigoPrograma'].'</td>
                          <td>'.$value['codigoAprendiz'].'</td>
                          <td class="text-center">
                            <button class="btn btn-social-icon bg-yellow" onclick="getDataM(this.parentElement.parentElement)" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button class="btn btn-social-icon btn-google" onClick="eraseM(this.parentElement.parentElement)">
                              <i class="fa fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                        ';
                    }
                  
                  }
                  
                ?>
            </form>
            <?php
             if(isset($_POST['codigoMatricula'])){
              $objCtrlMatricula = new MatriculaController();
              $objCtrlMatricula -> eraseMatricula();}
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

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
  
        <!-- /.box-body -->
        
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
      <div class="modal-header">
        <h4 class="modal-title">editame esta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" id="formMatriculaM">
        <input type="hidden" id="txtCodigoMatricula" name="txtCodigoMatricula">
            <div class="box-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                      <div class="input-group">
                          <span class="input-group-addon">Fecha</span>
                          <input type="date" class="form-control" id="txtDateM" name="txtDateM">
                          
                      </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                      <div class="input-group">
                          <span class="input-group-addon">Centro</span>
                          <input type="text" class="form-control" id="txtPlaceM" name="txtPlaceM">
                          <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      </div>
                      
                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                      
                    </div>

                    
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 20px;">Costo</i></span>
                        <input type="number" class="form-control" id="txtCostM" name="txtCostM">
                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 18px;">Estado</i></span>
                        <input type="text" class="form-control" id="txtStateM" name="txtStateM">
                        <span class="input-group-addon"><i class="fa fa-check-circle"></i></span>
                    </div>
                    
                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    
                    </div>
                    
                </div>

                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 20px;">Programa</i></span>
                        <input type="number" class="form-control" id="txtProgramnM" name="txtProgramnM">
                        <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 18px;">Aprendiz</i></span>
                        <input type="number" class="form-control" id="txtStudentM" name="txtStudentM">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    </div>
                    
                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    
                    </div>
                    
                </div>
                <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                
                </div>
                <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-app" style='float: left;'  onclick="validateMatriculaM(event)">
          <i class="fa fa-save"></i> guardar
        </button>
        <?php
          if (isset($_POST["txtDateM"])) {
            
            $objCtrlMatricula = new MatriculaController();
            $objCtrlMatricula -> setUpdateMatricula(
              $_POST["txtCodigoMatricula"],
              $_POST["txtDateM"],
              $_POST["txtPlaceM"],
              $_POST["txtCostM"],
              $_POST["txtStateM"],
              $_POST["txtProgramnM"],
              $_POST["txtStudentM"]
            );
          }
        ?>
        <button type="button" style='float: right;' class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>