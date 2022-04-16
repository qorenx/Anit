<div id="FlexGrid1">
<div class="basbar">
</div>
<div class="soltaraf">


<div class="vertical-menu">
<a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/" >ACP</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime">Anime</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/movie">Movie</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime/episode">Anime Episode</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/movie/episode" class="active">Movie Episode</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/fansub">Fansub</a>
</div> 
</div>
<div class="ortataraf">


<div class="row">

    <div id="Tabs1">

    <ul>
        <li><a href="#tabs1-page-4"><span><i class="fa fa-dashcube tabs-icon"></i><br>Movie Episode</span></a></li>
    </ul>

<div id="tabs1-page-4">
    <div id="Tabs4">
        <ul>
            <li><a href="#tabs4-page-1"><span><i class="fa fa-medium tabs-icon"></i><br>Movie Episode Add</span></a></li>
            <li><a href="#tabs4-page-2"><span><i class="fa fa-external-link-square tabs-icon"></i><br>Movie Episode Edit</span></a></li>
            <li><a href="#tabs4-page-3"><span><i class="fa fa-fire tabs-icon"></i><br>Movie Episode Delete</span></a></li>
        </ul>

    <div id="tabs4-page-1">
        <br>
Contest
        <br>
    </div>

    <div id="tabs4-page-2">
        <br>
Contest 2
        <br>
    </div>
    
    <div id="tabs4-page-3">
        <br>
Contest 3
        <br>
    </div>


</div>
</div>
</div>
</div>
</div>
<div class="sagtaraf">
</div>
</div>