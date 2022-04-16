
<?php $this->config = config('Auth'); $redirect = $this->config->assignRedirect;?>
<div class="reglogBackground">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-44 col-xl-5 reglogpanel">

          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-1 pb-1">
                <h3>Welcome to <?php echo session()->get('firstname') . ' ' . session()->get('lastname') ?></h3>
                <hr>
                <?php $validation = \Config\Services::validation(); ?>
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <?= session()->get('success'); ?>
                    </div>
                    <br>
                <?php endif; ?>                
                <form class="" action="<?php echo $redirect[session()->get('role')] ?>/profile" method="post">
                    <div class="form-group">
                        <input placeholder="First Name" type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname', session()->get('firstname')) ?>">
                        <?php if ($validation->getError('firstname')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('firstname'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <input placeholder="Last Name" type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname', session()->get('lastname')) ?>">
                        <?php if ($validation->getError('lastname')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('lastname'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <input placeholder="Email Address" type="text" class="form-control" name="email" id="email" value="<?= set_value('email', session()->get('email')) ?>">
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
                    <div class="form-group">
                        <input placeholder="Confirm Password" type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                        <?php if ($validation->getError('password_confirm')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('password_confirm'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class=" row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    </section>
</div>
