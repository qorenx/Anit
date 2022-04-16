<div class="reglogBackground">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-44 col-xl-5 reglogpanel">

          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-1 pb-1">
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
                <h3>Login</h3>
                <form class="" action="/login" method="post">
                    <div class="form-group">
                        <label for="email"></label>
                        <input placeholder="Email Address" "type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                        <?php if ($validation->getError('email')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('email'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <input placeholder="Password" type="password" class="form-control" name="password" id="password" value="">
                        <?php if ($validation->getError('password')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('password'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <?php if ($config->rememberMe) : ?>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" value="1">
                            <label class="form-check-label" for="rememberme">Remember Me</label>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <ul>
                                <li><a href="/register">Sign Up</a></li>
                                <li><a href="/forgotpassword">Forgot Password?</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
          </div>
      </div>
    </div>
  </div>
</div>
</section>