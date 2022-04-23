
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
                      <th style="width: 1%">
                          Type
                      </th>
                      <th style="width: 1%">
                          Years
                      </th>
                      <th style="width: 1%">
                          Score
                      </th>
                      <th style="width: 1%">
                          Episode
                      </th>
                      <th style="width: 15%">
                        Created-Updated
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
              <?php foreach($listdata as $anidata):?>
                  <tr>
                        <td>
                            <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img style="border-radius: 10%; display: inline; width: 5.5rem;"src="<?php echo $anidata['anime_img'];?>">
                              </li>
                            </ul>
                        </td>
                      <td>
                          <a>
                            <?php echo $anidata['animeuıd'];?>
                          </a>
                          <br>

                      </td>
                      <td>
                      <a style="display: block;"><?php echo $anidata['anime_name'];?></a>
                      <small style="display: block;"><?php echo $anidata['anime_name_atf'];?></small>
                      </td>
                      <td>
                      <?php echo $anidata['anime_type'];?>
                      </td>
                      <td>
                      <?php echo $anidata['anime_years'];?>
                      </td>
                      <td>
                      <?php echo $anidata['anime_score'];?>
                      </td>  
                      <td>
                      <?php echo $anidata['anime_episode'];?>
                      </td>
                      <td>
                      <a style="display: block;"><?php echo $anidata['created_at'];?></a>
                      <a style="display: block;"><?php echo $anidata['updated_at'];?></a>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-info"><?php echo $anidata['anime_status'];?></span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="anime_update/<?php echo $anidata['animeuıd'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-info btn-sm" href="anime_genre/<?php echo $anidata['animeuıd'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Genre
                          </a>
                          <a class="btn btn-danger btn-sm" href="anime_delete/<?php echo $anidata['animeuıd'];?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
          </table>
<?= $pager->links() ?>
