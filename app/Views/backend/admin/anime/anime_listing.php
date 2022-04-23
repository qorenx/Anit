
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
                          -
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
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_action'];?>">
                      <?php echo $anidata['genre_action'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_adventure'];?>">
                      <?php echo $anidata['genre_adventure'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_comedy'];?>">
                      <?php echo $anidata['genre_comedy'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_demons'];?>">
                      <?php echo $anidata['genre_demons'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_detective'];?>">
                      <?php echo $anidata['genre_detective'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_drama'];?>">
                      <?php echo $anidata['genre_drama'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_ecchi'];?>">
                      <?php echo $anidata['genre_ecchi'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_fantasy'];?>">
                      <?php echo $anidata['genre_fantasy'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_game'];?>">
                      <?php echo $anidata['genre_game'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_harem'];?>">
                      <?php echo $anidata['genre_harem'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_hentai'];?>">
                      <?php echo $anidata['genre_hentai'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_history'];?>">
                      <?php echo $anidata['genre_history'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_horror'];?>">
                      <?php echo $anidata['genre_horror'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_isekai'];?>">
                      <?php echo $anidata['genre_isekai'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_josei'];?>">
                      <?php echo $anidata['genre_josei'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_magic'];?>">
                      <?php echo $anidata['genre_magic'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_martialart'];?>">
                      <?php echo $anidata['genre_martialart'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_mecha'];?>">
                      <?php echo $anidata['genre_mecha'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_military'];?>">
                      <?php echo $anidata['genre_military'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_music'];?>">
                      <?php echo $anidata['genre_music'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_mystery'];?>">
                      <?php echo $anidata['genre_mystery'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_mythology'];?>">
                      <?php echo $anidata['genre_mythology'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_parody'];?>">
                      <?php echo $anidata['genre_parody'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_police'];?>">
                      <?php echo $anidata['genre_police'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_psychological'];?>">
                      <?php echo $anidata['genre_psychological'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_romance'];?>">
                      <?php echo $anidata['genre_romance'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_school'];?>">
                      <?php echo $anidata['genre_school'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_scifi'];?>">
                      <?php echo $anidata['genre_scifi'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_seinen'];?>">
                      <?php echo $anidata['genre_seinen'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_shoujo'];?>">
                      <?php echo $anidata['genre_shoujo'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_shounen'];?>">
                      <?php echo $anidata['genre_shounen'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_space'];?>">
                      <?php echo $anidata['genre_space'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_sports'];?>">
                      <?php echo $anidata['genre_sports'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_supernatural'];?>">
                      <?php echo $anidata['genre_supernatural'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_vampire'];?>">
                      <?php echo $anidata['genre_vampire'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_yaoi'];?>">
                      <?php echo $anidata['genre_yaoi'];?>
                      </a>
                      <a style="" href="<?php echo base_url();?>/anime/genres/<?php echo $anidata['genre_yuri'];?>">
                      <?php echo $anidata['genre_yuri'];?>
                      </a>
                      </td>  
                      <td>
                      <?php echo $anidata['anime_episode'];?>
                      </td>
                      <td>
                        
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
                          <a class="btn btn-info btn-sm" href="anime_update/<?php echo $anidata['ıd'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-info btn-sm" href="anime_genre/<?php echo $anidata['ıd'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Genre
                          </a>
                          <a class="btn btn-danger btn-sm" href="anime_delete/<?php echo $anidata['ıd'];?>">
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
