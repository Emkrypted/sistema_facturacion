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
              <h3 class="box-title">Crear Marca</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>brand/store" method="post">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" value="" class="form-control" name="brand" placeholder="Nombre">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?php echo base_url(); ?>brand" class="icon_link"><button type="button" class="btn btn-default">Regresar</button></a>
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