  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Presentaciones
        <a href="<?php echo base_url(); ?>presentation/create"><button type="submit" class="btn btn-warning">Agregar</button></a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Presentaciones</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <?php
          if($this->session->userdata('status_store') == 1)
          {
          ?>
            <div style="padding:10px;">&nbsp;</div>
            <div class="alert alert-success">
              Guardado con <strong>Exito!</strong>.
            </div>
          <?php
            $data = array(
                'status_store' => '0',
              );

            $this->session->set_userdata($data);
          }
          ?>
          <?php
          if($this->session->userdata('status_delete') == 1)
          {
          ?>
            <div style="padding:10px;">&nbsp;</div>
            <div class="alert alert-success">
              Borrado con <strong>Exito!</strong>.
            </div>
          <?php
            $data = array(
                'status_delete' => '0',
              );

            $this->session->set_userdata($data);
          }
          ?>
          <?php
          if($this->session->userdata('status_update') == 1)
          {
          ?>
            <div style="padding:10px;">&nbsp;</div>
            <div class="alert alert-success">
              Actualizado con <strong>Exito!</strong>.
            </div>
          <?php
            $data = array(
                'status_update' => '0',
              );

            $this->session->set_userdata($data);
          }
          ?>
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <?php
              if($presentations != false)
              {
              ?>
                <table id="presentation" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Presentación</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($presentations->result() as $presentation)
                  {
                  ?>
                    <tr>
                      <td>
                        <?php echo $presentation->id_presentation; ?>
                      </td>
                      <td>
                        <?php echo $presentation->presentation; ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url(); ?>presentation/edit/<?php echo $presentation->id_presentation; ?>" class="icon_link"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url(); ?>presentation/destroy/<?php echo $presentation->id_presentation; ?>" class="icon_link"><i class="fa fa-remove"></i></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>
              <?php
              }
              else
              {
              ?>
                <table>
                  <tr>
                    <td>
                      No hay registro
                    </td>
                  </tr>
                </table>
              <?php
              }
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   