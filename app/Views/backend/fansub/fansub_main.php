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
                          Fansub ID
                      </th>
                      <th style="width: 15%">
                          Fansub Name 
                      </th>
                      <th style="width: 35%">
                          Fansub WebSite
                      </th>
                      <th style="width: 35%">
                          Fansub IK
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach ($fansub as $key => $value) { ?>
                  <tr>
                      <td>
                          <a>
                            <?= $value ['fansub_ıd'] ?>
                          </a>
                          <br>
                      </td>
                      <td>
                      <?= $value ['fansub_name'] ?>
                      </td>
                      <td>
                      <?= $value ['fansub_web'] ?>
                      </td>
                      <td>
                      <?= $value ['fansub_lnk'] ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="update/<?= $value ['fansub_ıd'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete/<?= $value ['fansub_ıd'] ?>">
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