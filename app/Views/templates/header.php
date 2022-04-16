<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>/assets/usermod/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>/assets/usermod/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script href="<?php echo base_url();?>/assets/usermod/jquery-3.6.0.min.js"></script>
<script href="<?php echo base_url();?>/usermod/jquery-ui.min.js"></script>
<script href="<?php echo base_url();?>/usermod/wb.panel.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/panel/animeaddpanel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php $uri = service('uri') ?>
    <?php $this->config = config('Auth');
    $redirect = $this->config->assignRedirect; ?>


<div class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <button><a href="<?= base_url()?>" class="nav-link px-2 text-secondary"><i class="fa fa-home fa-fw"></i><span>Home</span></a></button>
          <?php if (session()->get('isLoggedIn')) : ?>
          
         <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
          <li><a href="<?php echo $redirect[session()->get('role')] ?>" class="nav-link px-2 text-white"><i class="fa fa-user-circle-o"></i><span>Profile</span></a></li>
         </li>

         <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">          
          <li><a href="<?php echo $redirect[session()->get('role')] ?>/profile" class="nav-link px-2 text-white"><i class="fa fa-expeditedssl"></i><span>Settings</span></a></li>
         </li>


          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
      <?php if ($this->config->lockScreen) : ?>
            <button role="menuitem"><a href="/lockscreen" class="nav-link"><i class="fa fa-wrench"></i><span>Locked</span></a></button>
      <?php endif; ?>
            <button role="menuitem"><a href="/logout" class="nav-link"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></button>
      <?php else : ?>
        <div class="text-end">
            <button class="<?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
               <li role="menuitem"><a href="/login" class="nav-link"><i class="fa fa-sign-in"></i>Sign İn</a></li>
            </button>
         <button class="<?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <li role="menuitem"><a href="/register" class="nav-link"><i class="fa fa-registered"></i><span>Sign-up</span></a></li>
         </button>
        </div>
      <?php endif; ?>

      </div>
    </div>
  </div>

</head>
<body>
</html>