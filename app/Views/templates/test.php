<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-44 col-xl-5 reglogpanel">

          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-1 pb-1">
                <h3>Screen Locked</h3>
                <hr>
                <?php $validation = \Config\Services::validation(); ?>
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->get('danger')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->get('danger'); ?>
                        <?php if (session()->get('resetlink')) {
                            echo session()->get('resetlink');
                        } ?>
                    </div>
                <?php endif; ?>

                <form class="" action="/login" method="post">

                    <input type="hidden" class="form-control" name="email" id="email" value="<?= session()->get('email') ?>">
                    <input type="hidden" class="form-control" name="rememberme" id="rememberme" value="<?= session()->get('rememberme') ?>">

                    <div class="form-group">
                        <input placeholder="Password" type="password" class="form-control" name="password" id="password" value="">
                        <?php if ($validation->getError('password')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('password'); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    </section>
</div>