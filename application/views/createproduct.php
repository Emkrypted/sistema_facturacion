  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Producto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>product/store" method="post">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Categoría</label>
                    <select class="form-control" id="sel1" name="id_category" required>
                      <option value="">-Seleccione-</option>
                      <?php
                      if($categories != false)
                      {
                        foreach($categories->result() as $category)
                        {
                      ?>
                          <option value="<?php echo $category->id_category; ?>"><?php echo $category->category; ?></option>
                      <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Presentación</label>
                    <select class="form-control" id="sel1" name="id_category" required>
                      <option value="">-Seleccione-</option>
                      <?php
                      if($presentations != false)
                      {
                        foreach($presentations->result() as $presentations)
                        {
                      ?>
                          <option value="<?php echo $presentation->id_presentation; ?>"><?php echo $presentation->presentation; ?></option>
                      <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <select class="form-control" id="sel1" name="id_category" required>
                      <option value="">-Seleccione-</option>
                      <?php
                      if($brands != false)
                      {
                        foreach($brands->result() as $brand)
                        {
                      ?>
                          <option value="<?php echo $brand->id_brand; ?>"><?php echo $brand->brand; ?></option>
                      <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del Producto</label>
                    <input type="text" value="" class="form-control" name="name" placeholder="Nombre del Producto" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio de Venta</label>
                    <input type="text" value="" class="form-control" name="sell_price" placeholder="Precio de Venta" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cantidad Minima de Stock</label>
                    <input type="number" min-val="" value="" class="form-control" name="minimal" placeholder="Cantidad Minima de Stock" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?php echo base_url(); ?>product" class="icon_link"><button type="button" class="btn btn-default">Regresar</button></a>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <div class="col-md-1">
          </div>
        </div>
      </div>
    </section>
  </div>