<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://localhost/assets/usermod/jquery-ui.min.css" rel="stylesheet">
<link href="https://localhost/assets/usermod/font-awesome.min.css" rel="stylesheet">
<link href="https://localhost/assets/usermod/Untitled1.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://localhost/assets/usermod/jquery-3.6.0.min.js"></script>
<script src="https://localhost/assets/usermod/jquery-ui.min.js"></script>
<script src="https://localhost/assets/usermod/wb.panel.min.js"></script>
<link rel="stylesheet" href="https://localhost/assets/css/custom.css">
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
   $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'overlay', position: 'right', toggle: true, overlay: true});
});
</script>

    <?php $uri = service('uri') ?>
    <?php $this->config = config('Auth');
    $redirect = $this->config->assignRedirect; ?>
<div id="wb_PageHeader">
<div id="PageHeader">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon1">
<a href="#PanelMenu1_markup" id="PanelMenu1" class="fa fa-user-circle-o"></a>
</div>


<div id="PanelMenu1_markup">
<ul role="menu">
   <li role="menuitem"><a href="<?= base_url()?>" class="nav-link"><i class="fa fa-home fa-fw"></i><span>Home</span></a></li>
   <?php if (session()->get('isLoggedIn')) : ?>

    <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
    <li role="menuitem"><a href="<?php echo $redirect[session()->get('role')] ?>" class="nav-link"><i class="fa fa-user-circle-o"></i><span>Profil</span></a></li>
    </li>

    <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">          
    <li role="menuitem"><a href="<?php echo $redirect[session()->get('role')] ?>/profile" class="nav-link"><i class="fa fa-expeditedssl"></i><span>Settings</span></a></li>
    </li>

    <?php if ($this->config->lockScreen) : ?>
    <li role="menuitem"><a href="/lockscreen" class="nav-link"><i class="fa fa-wrench"></i><span>Locked</span></a></li>
    <?php endif; ?>

    <li role="menuitem"><a href="/logout" class="nav-link"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>
    
    <?php else : ?> 

    <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
    <li role="menuitem"><a href="/login" class="nav-link"><i class="fa fa-sign-in"></i><span>Sign İn</span></a></li>
    </li>

    <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
    <li role="menuitem"><a href="/register" class="nav-link"><i class="fa fa-registered"></i><span>Registered</span></a></li>
    </li>

    <?php endif; ?>
</ul>
</div>
</div>
</div>
</div>
</div>
</head>
<body>
</html>