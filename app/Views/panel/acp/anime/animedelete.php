<div id="FlexGrid1">
<div class="soltaraf">

<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/panel/animeaddpanel.css">

<div class="vertical-menu">
<a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/" style="text-align: center">ACP</a>
<a style="text-align: center">Anime Control</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-list">Anime List</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-add" >Anime Add</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-edit">Anime Edit</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime-delete" class="active">Anime Delete</a>
</div>  
</div>
<div class="ortataraf">

delete
    
</div>
</div>
<div class="sagtaraf">
</div>