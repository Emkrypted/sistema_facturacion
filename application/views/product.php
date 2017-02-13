  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Productos
        <a href="<?php echo base_url(); ?>product/create"><button type="submit" class="btn btn-warning">Agregar</button></a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Productos</a></li>
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
              if($products != false)
              {
              ?>
                <table id="category" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Presentación</th>
                    <th>Minimo</th>
                    <th>Stock</th>
                    <th>Compra</th>
                    <th>Precio</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach($products->result() as $product)
                  {
                  ?>
                    <tr>
                      <td>
                        <?php echo $product->id_product; ?>
                      </td>
                      <td>
                        <?php echo $product->product; ?>
                      </td>
                      <td>
                        <?php echo $product->brand; ?>
                      </td>
                      <td>
                        <?php echo $product->presentation; ?>
                      </td>
                      <td>
                        <?php echo $product->minimal; ?>
                      </td>
                      <td>
                        <?php echo $product->stock; ?>
                      </td>
                      <td>
                        <?php echo $product->buy_price; ?>
                      </td>
                      <td>
                        <?php echo $product->sell_price; ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url(); ?>product/edit/<?php echo $product->id_product; ?>" class="icon_link"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url(); ?>product/destroy/<?php echo $product->id_product; ?>" class="icon_link"><i class="fa fa-remove"></i></a>
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
   