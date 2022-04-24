
<div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
              Editing
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/anime/anime_update" method="post">
                <div class="card-body">
                <div class="form-group">
                <input type="text" style="visibility: hidden; height: 0;" id="gıd" name="gıd" class="form-control" value="<?php echo $anime_obj['ıd']; ?>">
                <input type="text" style="visibility: hidden; height: 0;" id="animeuıd" name="animeuıd" class="form-control" value="<?php echo $anime_obj['animeuıd']; ?>">
                        <label>AnimeUID: </label>
                        <select class="form-control" name="animeuıd">
                            <option value="<?php echo $anime_obj['animeuıd']; ?>"><?php echo $anime_obj['animeuıd']; ?></option>
                        </select>  
                  </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="anime_name" class="form-control" value="<?php echo $anime_obj['anime_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label label>Alternative Name</label>
                        <input type="text" name="anime_name_atf" class="form-control" value="<?php echo $anime_obj['anime_name_atf']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Country: </label>
                        <select class="form-control" name="anime_country" value="<?php echo $anime_obj['anime_country']; ?>">
                                    <option value="Japanese">Japanese</option>
                                    <option value="Chine">Chine</option>
                                    <option value="Other">Other</option>
                        </select>  
                  </div>
                    <div class="form-group">
                      <label for="anime_type">Type</label>
                      <select class="form-control" name="anime_type" id="anime_type" value="<?php echo $anime_obj['anime_type']; ?>">
                        <option value="TV">TV</option>
                        <option value="Movie">Movie</option>
                        <option value="Ova">Ova</option>
                        <option value="Special">Special</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Years</label>
                        <input type="text" name="anime_years" class="form-control" value="<?php echo $anime_obj['anime_years']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="anime_status">Status</label>
                      <select class="form-control" name="anime_status" id="anime_status" value="<?php echo $anime_obj['anime_status']; ?>">
                        <option value="Air">Air</option>
                        <option value="Finished">Finished</option>
                        <option value="Drop">Drop</option>
                        <option value="Wait">Wait</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label for="anime_status">Anime Sub or Dub</label>
                      <select class="form-control" name="anime_subdub" id="anime_subdub"  placeholder="Anime Sub or Dub">
                        <option value="Sub">Sub</option>
                        <option value="Dub">Dub</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Episode</label>
                        <input type="text" name="anime_episode" class="form-control" value="<?php echo $anime_obj['anime_episode']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="text" name="anime_duration" class="form-control" value="<?php echo $anime_obj['anime_duration']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="anime_score" class="form-control" value="<?php echo $anime_obj['anime_score']; ?>">
                    </div>
                    <div class="form-group">
                        <label>İMG</label>
                        <input type="text" name="anime_img" class="form-control" value="<?php echo $anime_obj['anime_img']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Wallpaper</label>
                        <input type="text" name="anime_wall" class="form-control" value="<?php echo $anime_obj['anime_wall']; ?>">
                    </div>
                    <div class="form-group">
                        <label>PV</label>
                        <input type="text" name="anime_pv" class="form-control" value="<?php echo $anime_obj['anime_pv']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" name="anime_website" class="form-control" value="<?php echo $anime_obj['anime_website']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Prequel</label>
                        <input type="text" name="anime_prequel" class="form-control" value="<?php echo $anime_obj['anime_prequel']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Sequel</label>
                        <input type="text" name="anime_sequel" class="form-control" value="<?php echo $anime_obj['anime_sequel']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Op</label>
                        <input type="text" name="anime_op" class="form-control" value="<?php echo $anime_obj['anime_op']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Ed</label>
                        <input type="text" name="anime_ed" class="form-control" value="<?php echo $anime_obj['anime_ed']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Synopsis</label>
                        <textarea id="inputDescription" class="form-control" rows="4" name="anime_synopsis" class="form-control"><?php echo $anime_obj['anime_synopsis']; ?>
                        </textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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