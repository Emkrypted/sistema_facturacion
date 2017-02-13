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
              <h3 class="box-title">Crear Proveedor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>supplier/store" method="post">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de Contribuyente</label>
                    <select class="form-control" id="sel1" name="id_taxpaper" required>
                      <option value="">-Seleccione-</option>
                      <?php
                      if($taxpapers != false)
                      {
                        foreach($taxpapers->result() as $taxpaper)
                        {
                      ?>
                          <option value="<?php echo $taxpaper->id_taxpaper; ?>"><?php echo $taxpaper->taxpaper; ?></option>
                      <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">RIF</label>
                    <input type="text" value="" class="form-control" name="identification_number" placeholder="RIF" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Razón Social</label>
                    <input type="text" value="" class="form-control" name="company_name" placeholder="Razón Social" required required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Representante</label>
                    <input type="text" value="" class="form-control" name="representative" placeholder="Representante" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input type="text" value="" class="form-control" name="phone" placeholder="Teléfono" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?php echo base_url(); ?>supplier" class="icon_link"><button type="button" class="btn btn-default">Regresar</button></a>
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