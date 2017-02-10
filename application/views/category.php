  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorías
        <a href="<?php echo base_url(); ?>category/create"><button type="submit" class="btn btn-warning">Agregar</button></a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Categorías</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <?php
          if($this->session->userdata('status_category') == 1)
          {
          ?>
            <div style="padding:10px;">&nbsp;</div>
            <div class="alert alert-success">
              Guardado con <strong>Exito!</strong>.
            </div>
          <?php
            $data = array(
                'status_category' => '0',
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
              if($categories != false)
              {
              ?>
                <table id="category" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Categoría</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($categories->result() as $category)
                  {
                  ?>
                    <tr>
                      <td>
                        <?php echo $category->id_category; ?>
                      </td>
                      <td>
                        <?php echo $category->category; ?>
                      </td>
                      <td>
                        <a href="#" class="icon_link"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="icon_link"><i class="fa fa-remove"></i></a>
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
   