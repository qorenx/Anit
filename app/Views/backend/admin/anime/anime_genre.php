
<div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
              <h4>AnimeUID-> "<?php echo $anime_obj['gbid']; ?>"</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/admin/anime/anime_genre" method="post">
                <div class="card-body">
                        <input type="text" style="visibility: hidden; height: 0;" id="gıd" name="gıd" class="form-control" value="<?php echo $anime_obj['gıd']; ?>">
                        <input type="text" style="visibility: hidden; height: 0;" id="animeuıd" name="animeuıd" class="form-control" value="<?php echo $anime_obj['gbid']; ?>">
                <div class="form-group">
                      <label>Is there? Action?</label>
                      <select class="form-control" name="genre_action">
                        <option></option>
                        <option value="Action">Action</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Adventure?</label>
                      <select class="form-control" name="genre_adventure">
                        <option></option>
                        <option>Adventure</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Comedy?</label>
                      <select class="form-control" name="genre_comedy">
                        <option></option>
                        <option>Comedy</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Demons?</label>
                      <select class="form-control" name="genre_demons">
                        <option></option>
                        <option>Demons</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Detective?</label>
                      <select class="form-control" name="genre_detective">
                        <option></option>
                        <option>Detective</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Drama?</label>
                      <select class="form-control" name="genre_drama">
                        <option></option>
                        <option>Drama</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Ecchi?</label>
                      <select class="form-control" name="genre_ecchi">
                        <option></option>
                        <option>Ecchi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Fantasy?</label>
                      <select class="form-control" name="genre_fantasy">
                        <option></option>
                        <option>Fantasy</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Game?</label>
                      <select class="form-control" name="genre_game">
                        <option></option>
                        <option>Game</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Harem?</label>
                      <select class="form-control" name="genre_harem">
                        <option></option>
                        <option>Harem</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Hentai?</label>
                      <select class="form-control" name="genre_hentai">
                        <option></option>
                        <option>Hentai</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? History?</label>
                      <select class="form-control" name="genre_history">
                        <option></option>
                        <option>History</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Horror?</label>
                      <select class="form-control" name="genre_horror">
                        <option></option>
                        <option>Horror</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? İsekai?</label>
                      <select class="form-control" name="genre_isekai">
                        <option></option>
                        <option>İsekai</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Josei?</label>
                      <select class="form-control" name="genre_josei">
                        <option></option>
                        <option>Josei</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Magic?</label>
                      <select class="form-control" name="genre_magic">
                        <option></option>
                        <option>Magic</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Martial-Art?</label>
                      <select class="form-control" name="genre_martialart">
                        <option></option>
                        <option>Martial-Art</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Mecha?</label>
                      <select class="form-control" name="genre_mecha">
                        <option></option>
                        <option>Mecha</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Militaray?</label>
                      <select class="form-control" name="genre_military">
                        <option></option>
                        <option>Military</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Music?</label>
                      <select class="form-control" name="genre_music">
                        <option></option>
                        <option>Music</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Mystery?</label>
                      <select class="form-control" name="genre_mystery">
                        <option></option>
                        <option>Mystery</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Mythology?</label>
                      <select class="form-control" name="genre_mythology">
                        <option></option>
                        <option>Mythology</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Parody?</label>
                      <select class="form-control" name="genre_parody">
                        <option></option>
                        <option>Parody</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Police?</label>
                      <select class="form-control" name="genre_police">
                        <option></option>
                        <option>Police</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Psychological?</label>
                      <select class="form-control" name="genre_psychological">
                        <option></option>
                        <option>Psychological</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Romance?</label>
                      <select class="form-control" name="genre_romance">
                        <option></option>
                        <option>Romance</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? School?</label>
                      <select class="form-control" name="genre_school">
                        <option></option>
                        <option>School</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Sci-Fi?</label>
                      <select class="form-control" name="genre_scifi">
                        <option></option>
                        <option>Sci-Fi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Seinen?</label>
                      <select class="form-control" name="genre_seinen">
                        <option></option>
                        <option>Seinen</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Shoujo?</label>
                      <select class="form-control" name="genre_shoujo">
                        <option></option>
                        <option>Shoujo</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Shounen?</label>
                      <select class="form-control" name="genre_shounen">
                        <option></option>
                        <option>Shounen</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Space?</label>
                      <select class="form-control" name="genre_space">
                        <option></option>
                        <option>Space</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Sports?</label>
                      <select class="form-control" name="genre_sports">
                        <option></option>
                        <option>Sports</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Super-Natural?</label>
                      <select class="form-control" name="genre_supernatural">
                        <option></option>
                        <option>Super-Natural</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Vampire?</label>
                      <select class="form-control" name="genre_vampire">
                        <option></option>
                        <option>Vampire</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Yaoi?</label>
                      <select class="form-control" name="genre_yaoi">
                        <option></option>
                        <option>Yaoi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Is there? Yuri?</label>
                      <select class="form-control" name="genre_yuri">
                        <option></option>
                        <option>Yuri</option>
                      </select>
                    </div>
                
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Genres ADD</button>
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