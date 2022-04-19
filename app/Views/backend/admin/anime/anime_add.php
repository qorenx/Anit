
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
                        <input type="text" name="anime_country" class="form-control" placeholder="Anime Country">
                    </div>
                    <div class="form-group">
                      <label for="anime_type">Anime Type</label>
                      <select multiple class="form-control" name="anime_type[]" id="anime_type">
                        <option>TV</option>
                        <option>Movie</option>
                        <option>Ova</option>
                        <option>Special</option>
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
                        <option>Action</option>
                        <option>Adventure</option>
                        <option>Comedy</option>
                        <option>Demons</option>
                        <option>Detective</option>
                        <option>Drama</option>
                        <option>Ecchi</option>
                        <option>Fantasy</option>
                        <option>Game</option>
                        <option>Harem</option>
                        <option>Hentai</option>
                        <option>History</option>
                        <option>Horror</option>
                        <option>İsekai</option>
                        <option>Josei</option>
                        <option>Magic</option>
                        <option>Martial Arts</option>
                        <option>Mecha</option>
                        <option>Military</option>
                        <option>Music</option>
                        <option>Mystery</option>
                        <option>Mythology</option>
                        <option>Parody</option>
                        <option>Police</option>
                        <option>Psychological</option>
                        <option>Romance</option>
                        <option>School</option>
                        <option>Sci-Fi</option>
                        <option>Seinen</option>
                        <option>Shoujo</option>
                        <option>Shounen</option>
                        <option>Space</option>
                        <option>Sports</option>
                        <option>SuperNatural</option>  
                        <option>Vampire</option>
                        <option>Yaoi</option>
                        <option>Yuri</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="anime_fansub">Anime Fansub</label>
                      <select multiple class="form-control" name="anime_fansub[]" id="anime_fansub">
                        <option>Fansub-1</option>
                        <option>Fansub-2</option>
                        <option>Fansub-3</option>
                        <option>Fansub-4</option>
                        <option>Fansub-5</option>
                        <option>Fansub-6</option>
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