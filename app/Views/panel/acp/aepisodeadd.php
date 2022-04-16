<div id="FlexGrid1">
<div class="basbar">
</div>
<div class="soltaraf">


<div class="vertical-menu">
<a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/" >ACP</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime" >Anime</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/movie">Movie Add</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/anime/episode" class="active">Anime Episode Add</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/movie/episode">Movie Episode Add</a>
  <a href="<?php echo base_url();?>/<?= session()->get('rolname') ?>/panel/fansub">Fansub</a>
</div> 
</div>
<div class="ortataraf">


<div class="row">

    <div id="Tabs1">

    <ul>
        <li><a href="#tabs1-page-3"><span><i class="fa fa-circle-o-notch tabs-icon"></i><br>Anime Episode</span></a></li>
    </ul>

<div id="tabs1-page-3">
    <div id="Tabs3">
        <ul>
            <li><a href="#tabs3-page-1"><span><i class="fa fa-envira tabs-icon"></i><br>Anime Episode Add</span></a></li>
            <li><a href="#tabs3-page-2"><span><i class="fa fa-crop tabs-icon"></i><br>Anime Episode Edit</span></a></li>
            <li><a href="#tabs3-page-3"><span><i class="fa fa-eraser tabs-icon"></i><br>Anime Episode Delete</span></a></li>
        </ul>

    <div id="tabs3-page-1">
        <br>
Contest
        <br>
    </div>

    <div id="tabs3-page-2">
        <br>
Contest 2
        <br>
    </div>

    <div id="tabs3-page-3">
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