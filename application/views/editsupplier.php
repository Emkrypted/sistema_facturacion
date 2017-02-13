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
              <h3 class="box-title">Editar Proveedor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>supplier/update" method="post">
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
                          <option value="<?php echo $taxpaper->id_taxpaper; ?>" <?php if ($taxpaper->id_taxpaper == $supplier[0]->id_taxpaper) { ?> selected <?php } ?>><?php echo $taxpaper->taxpaper; ?></option>
                      <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">RIF</label>
                    <input type="text" value="<?php echo $supplier[0]->identification_number; ?>" class="form-control" name="identification_number" placeholder="RIF" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Razón Social</label>
                    <input type="text" value="<?php echo $supplier[0]->company_name; ?>" class="form-control" name="company_name" placeholder="Razón Social" required required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Representante</label>
                    <input type="text" value="<?php echo $supplier[0]->representative; ?>" class="form-control" name="representative" placeholder="Representante" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input type="text" value="<?php echo $supplier[0]->phone; ?>" class="form-control" name="phone" placeholder="Teléfono" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden" value="<?php echo $supplier[0]->id_supplier; ?>" class="form-control" name="id_supplier">
                <button type="submit" class="btn btn-success">Editar</button>
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