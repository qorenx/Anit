<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title>Anime Panel</title>
<link href="https://localhost/assets/usermod/jquery-ui.min.css" rel="stylesheet">
<link href="https://localhost/assets/usermod/Untitled1.css" rel="stylesheet">
<link href="https://localhost/assets/usermod/index.css" rel="stylesheet">
<script src="https://localhost/assets/usermod/jquery-3.6.0.min.js"></script>
<script src="https://localhost/assets/usermod/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://localhost/assets/css/custom.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
$(document).ready(function()
{
   $("#Tabs1").tabs(
   {
      show: false,
      hide: false,
      event: 'click',
      collapsible: false
   });
   $("#Tabs2").tabs(
   {
      show: false,
      hide: false,
      event: 'click',
      collapsible: false
   });
   $("#Tabs3").tabs(
   {
      show: false,
      hide: false,
      event: 'click',
      collapsible: false
   });
   $("#Tabs4").tabs(
   {
      show: false,
      hide: false,
      event: 'click',
      collapsible: false
   });
   $("#Tabs5").tabs(
   {
      show: false,
      hide: false,
      event: 'click',
      collapsible: false
   });
   $("#Tabs6").tabs(
   {
      show: false,
      hide: false,
      event: 'click',
      collapsible: false
   });
});
</script>

</head>

<body>
    <?php $uri = service('uri') ?>
    <?php $this->config = config('Auth');
    $redirect = $this->config->assignRedirect; ?>
<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:70px">
            <a href="<?= base_url()?>" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
    <?php if (session()->get('isLoggedIn')) : ?>
        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
            <a   a href="<?php echo $redirect[session()->get('role')] ?>" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o"></i></a> 
        </li>

        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash"></i></a> 


        <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">           
            <a href="<?php echo $redirect[session()->get('role')] ?>/profile" class="w3-bar-item w3-button"><i class="fa fa-expeditedssl"></i></a> 
        </li>

    <?php if ($this->config->lockScreen) : ?>
            <a href="/lockscreen" class="w3-bar-item w3-button"><i class="fa fa-wrench"></i></a>
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
