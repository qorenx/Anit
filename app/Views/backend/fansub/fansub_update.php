 
<div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Editing => <?php echo $fansub_obj['fansub_name']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/fansub/update" method="post">
                <div class="card-body">
                    <input type="text" style="visibility: hidden;" name="fansub_ıd" class="form-control" value="<?php echo $fansub_obj['fansub_ıd']; ?>">
                    <div class="form-group">
                        <input type="text" name="fansub_name" class="form-control" value="<?php echo $fansub_obj['fansub_name']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fansub_web" class="form-control" value="<?php echo $fansub_obj['fansub_web']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="fansub_lnk" class="form-control" value="<?php echo $fansub_obj['fansub_lnk']; ?>">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Fansub Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->