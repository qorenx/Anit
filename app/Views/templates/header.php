<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>Anitium</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" src="https://localhost/assets/css/custom.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php $uri = service('uri') ?>
<?php $this->config = config('Auth');
$redirect = $this->config->assignRedirect; ?>
<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:70px">
  <a href="<?= base_url()?>" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
<?php if (session()->get('isLoggedIn')) : ?>

  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o"></i></a> 
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash"></i></a> 

<?php if ($this->config->lockScreen) : ?>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-wrench"></i></a>
<?php endif; ?>

    <a href="/logout" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a> 


<?php else : ?> 
    <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
    <a href="/login" class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i></a> 
    </li>
    <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
    <a href="/register" class="w3-bar-item w3-button"><i class="fa fa-registered"></i></a> 
    </li>
<?php endif; ?>
</div>

      
</body>
</html>
