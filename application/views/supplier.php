  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proveedores
        <a href="<?php echo base_url(); ?>supplier/create"><button type="submit" class="btn btn-warning">Agregar</button></a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Proveedores</a></li>
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
              if($suppliers != false)
              {
              ?>
                <table id="category" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>RIF</th>
                    <th>Razón Social</th>
                    <th>Tipo de Contribuyente</th>
                    <th>Representante</th>
                    <th>Teléfono</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($suppliers->result() as $supplier)
                  {
                  ?>
                    <tr>
                      <td>
                        <?php echo $supplier->id_supplier; ?>
                      </td>
                      <td>
                        <?php echo $supplier->identification_number; ?>
                      </td>
                      <td>
                        <?php echo $supplier->company_name; ?>
                      </td>
                      <td>
                        <?php echo $supplier->taxpaper; ?>
                      </td>
                      <td>
                        <?php echo $supplier->representative; ?>
                      </td>
                      <td>
                        <?php echo $supplier->phone; ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url(); ?>supplier/edit/<?php echo $supplier->id_supplier; ?>" class="icon_link"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url(); ?>supplier/destroy/<?php echo $supplier->id_supplier; ?>" class="icon_link"><i class="fa fa-remove"></i></a>
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
   