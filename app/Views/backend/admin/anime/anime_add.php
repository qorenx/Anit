
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
                        <div class="col-auto">
                            <button class="btn btn-primary" id="getit">Get Anime UID!</button>
                            <text><p onclick="copy(this)" id="randomnumber"></p/</text>
                        </div>
                    <br>
                    <input type="text" id="animeuıd" name="animeuıd" class="form-control" placeholder="Anime UID GET - Click and Paste">
                    <br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_name" class="form-control" placeholder="Anime Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_name_atf" class="form-control" placeholder="Anime Alternative Name">
                    </div>
                    <div class="form-group">
                        <label>Country: </label>
                        <select class="form-control" name="anime_country">
                                    <option value="Japanese">Japanese</option>
                                    <option value="Chine">Chine</option>
                                    <option value="Other">Other</option>
                        </select>  
                     </div>
                    <div class="form-group">
                      <label for="anime_type">Type:</label>
                      <select class="form-control" name="anime_type" id="anime_type">
                        <option value="TV">TV</option>
                        <option value="Movie">Movie</option>
                        <option value="Ova">Ova</option>
                        <option value="Special">Special</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="anime_subdub" id="anime_subdub"  placeholder="Anime Sub or Dub">
                        <option value="anime_subdub">Anime Sub or Dub</option>
                        <option value="Sub">Sub</option>
                        <option value="Dub">Dub</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_years" class="form-control" placeholder="Anime Years">
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="anime_status" id="anime_status"  placeholder="Anime Status">
                        <option value="Air">Air</option>
                        <option value="Finished">Finished</option>
                        <option value="Drop">Drop</option>
                        <option value="Wait">Wait</option>
                      </select>
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
                        <input type="text" name="anime_img" class="form-control" placeholder="Anime İmage">
                    </div>
                    <div class="form-group">
                        <input type="text" name="anime_wall" class="form-control" placeholder="Anime WallPaper">
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
                    <textarea id="inputDescription" class="form-control" rows="4" name="anime_synopsis" class="form-control" placeholder="Anime Synopsis"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Anime Add</button>
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