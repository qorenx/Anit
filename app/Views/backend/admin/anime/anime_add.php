<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">

        



        <div class="col-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Anime Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/anime/anime_add/add" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="animeuıd" class="form-control" placeholder="Anime UID">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_name" class="form-control" placeholder="Anime Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_country" class="form-control" placeholder="Anime Country">
                    </div>
                    


                    <div class="form-group">
                      <label for="anime_type">Anime Type</label>
                      <select multiple class="form-control" name="anime_type[]" id="anime_type">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>





                    <div class="form-group">
                        <input type="text" name="anime_years" class="form-control" placeholder="Anime Years">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_status" class="form-control" placeholder="Anime Status">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_episode" class="form-control" placeholder="Anime Episode">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_duration" class="form-control" placeholder="Anime Duration">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_score" class="form-control" placeholder="Anime Score">
                    </div>





                    <div class="form-group">
                      <label for="anime_genres">Anime Genres</label>
                      <select multiple class="form-control" name="anime_genres[]" id="anime_genres">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>










                    <div class="form-group">
                      <label for="anime_fansub">Anime Fansub</label>
                      <select multiple class="form-control" name="anime_fansub[]" id="anime_fansub">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>








                    <div class="form-group">
                        <input type="text" name="anime_img" class="form-control" placeholder="Anime İmage">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_pv" class="form-control" placeholder="Anime PV">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_website" class="form-control" placeholder="Anime Website">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_prequel" class="form-control" placeholder="Anime Prequel">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_sequel" class="form-control" placeholder="Anime Sequel">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_op" class="form-control" placeholder="Anime Op">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_ed" class="form-control" placeholder="Anime Ed">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_synopsis" class="form-control" placeholder="Anime Synopsis">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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