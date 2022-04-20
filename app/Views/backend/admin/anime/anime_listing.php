<div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          Cover
                      </th>
                      <th style="width: 10%">
                          UID-ID
                      </th>
                      <th style="width: 25%">
                          Anime 
                      </th>
                      <th style="width: 5%">
                          Type
                      </th>
                      <th style="width: 5%">
                          Years
                      </th>
                      <th style="width: 25%">
                          Genres
                      </th>
                      <th style="width: 5%">
                          Episode
                      </th>
                      <th style="width: 10%">
                          Fansub
                      </th>
                      <th style="width: 5%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      ACP
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php if($anime): ?>
                <?php foreach($anime as $animes): ?>
                  <tr>
                        <td>
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img style="border-radius: 10%; display: inline; width: 5.5rem;"src="<?php echo $animes['anime_img']; ?>">
                              </li>
                            </ul>
                        </td>
                      <td>
                          <a>
                            <?php echo $animes['animeuıd']; ?>
                          </a>
                          <br>
                          <small>
                            <?php echo $animes['ıd']; ?>
                          </small>

                      </td>
                      <td>
                      <?php echo $animes['anime_name']; ?>
                      </td>
                      <td>
                      <?php echo $animes['anime_type']; ?>
                      </td>
                      <td>
                      <?php echo $animes['anime_years']; ?>
                      </td>
                      <td>
                      <?php echo $animes['anime_genres']; ?>
                      </td>
                      <td>
                      <?php echo $animes['anime_episode']; ?>
                      </td>
                      <td>
                      <?php echo $animes['anime_fansub']; ?>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-info"><?php echo $animes['anime_status']; ?></span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php endforeach; ?>
                <?php endif; ?>
              </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>