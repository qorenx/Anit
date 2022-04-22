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
                      <th style="width: 1%">
                          UID
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
              <?php foreach ($anime as $key => $value) { ?>
                  <tr>
                        <td>
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img style="border-radius: 10%; display: inline; width: 5.5rem;"src="<?= $value ['anime_img'] ?>">
                              </li>
                            </ul>
                        </td>
                      <td>
                          <a>
                            <?= $value ['animeuıd'] ?>
                          </a>
                          <br>
                          <small style="visibility: hidden; height: 0;">
                            <?= $value ['ıd'] ?>
                          </small>

                      </td>
                      <td>
                      <a style="display: block;"><?= $value ['anime_name'] ?></a>
                      <small style="display: block;"><?= $value ['anime_name_atf'] ?></small>
                      </td>
                      <td>
                      <?= $value ['anime_type'] ?>
                      </td>
                      <td>
                      <?= $value ['anime_years'] ?>
                      </td>
                      <td>
                      <?= $value ['anime_genres'] ?> 
                      </td>  
                      <td>
                      <?= $value ['anime_episode'] ?>
                      </td>
                      <td>
                      <?= $value ['anime_fansub'] ?>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-info"><?= $value ['anime_status'] ?></span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="anime_update/<?= $value ['ıd'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="anime_delete/<?= $value ['ıd'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
          
          <?= $pager->links() ?>