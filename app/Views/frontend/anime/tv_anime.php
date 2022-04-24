<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">

        









<body data-page="page_list">
<div class="clearfix"></div>

<div id="main-content">

<section class="block_area block_area_category">
<div class="block_area-header block_area-header-tabs">
<div class="float-left bah-heading mr-4">
<h2 class="cat-heading">ANIME TV Series</h2>
</div>
<div class="clearfix"></div>
</div>
<div class="tab-content">
<div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
<div class="film_list-wrap">
<!-- -->
<?php foreach($listdata as $anidata):?>
<div class="flw-item">
<div class="film-poster">
<div class="tick ltr">
<div class="tick-item tick-dub bg-danger text-white">
<?php echo $anidata['anime_status'];?>
</div>
</div>
<div class="tick rtl">
<div class="tick-item tick-eps">
<?php echo $anidata['anime_episode'];?>
</div></div>
<img class="film-poster-img lazyloaded" src="<?php echo $anidata['anime_img'];?>">
<a class="film-poster-ahref" href="/tv_anime/<?php echo $anidata['animeuıd'];?>/<?php echo $anidata['anime_name'];?>" title="<?php echo $anidata['anime_name_atf'];?>"><i class="fas fa-play"></i></a>
</div>
<div class="film-detail">
<h3 class="film-name">
<a class="dynamic-name" 
href="/tv_anime/<?php echo $anidata['animeuıd'];?>/<?php echo $anidata['anime_name'];?>" title="" title="" data-jname=""><?php echo $anidata['anime_name'];?>
</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">
<?php echo $anidata['anime_type'];?>
</span>
<span class="dot"></span>
<span class="fdi-item fdi-duration">
<?php echo $anidata['anime_duration'];?> min/ep
</span>
<span class="dot"></span>
<span class="fdi-item fdi-year">
<?php echo $anidata['anime_years'];?>
</span>
</div>
</div>
<div class="clearfix"></div>
</div>
<?php endforeach;?>


</div>
<div class="clearfix"></div>

<?= $pager->links() ?>


</div>
</div>
</section>

<div class="clearfix"></div>
</div>


<div id="main-sidebar">
</section> <section class="block_area block_area_sidebar block_area-realtime">
<div class="block_area-header">
<div class="float-left bah-heading mr-2">
<h2 class="cat-heading">Most Viewed</h2>
</div>
<div class="float-right bah-tab-min">
<ul class="nav nav-pills nav-fill nav-tabs anw-tabs">
<li class="nav-item"><a data-toggle="tab" href="#top-viewed-day" class="nav-link active">Popular</a></li>
</ul>
</div>
<div class="clearfix"></div>
</div>
<div class="block_area-content">
<div class="cbox cbox-list cbox-realtime">
<div class="cbox-content">
<div class="tab-content">
<div id="top-viewed-day" class="anif-block-ul anif-block-chart tab-pane active">
<ul class="ulclear">


<li class="item-top">
<div class="film-number"><span>01</span></div>
<div class="film-poster">
<img data-src="" class="film-poster-img lazyload" alt="">
</div>
<div class="film-detail">
<h3 class="film-name">
<a href="" title="" class="dynamic-name" data-jname="">Anime Name</a>
</h3>
<div class="fd-infor">
<span class="fdi-item">
<i class="fas fa-eye mr-2"></i>
x views </span>
</div>
</div>
<div class="film-fav list-wl-item" data-id="ke9"><i class="fa fa-plus"></i></div>
<div class="clearfix"></div>
</li>
</ul>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</section>




<section class="block_area block_area_sidebar block_area-genres">
<div class="block_area-header">
<div class="float-left bah-heading mr-4">
<h2 class="cat-heading">Genres</h2>
</div>
<div class="clearfix"></div>
</div>
<div class="block_area-content">
<div class="cbox cbox-genres">
<ul class="ulclear color-list sb-genre-list sb-genre-less">
<li><a href="/genre/action">Action</a></li>
<li><a href="/genre/adventure">Adventure</a></li>
<li><a href="/genre/comedy">Comedy</a></li>
<li><a href="/genre/drama">Drama</a></li>
<li><a href="/genre/fantasy">Fantasy</a></li>
<div class="clearfix"></div>
</div>
</div>
</section>
</div>
<div class="clearfix"></div>
</div>
</div> 



















</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</section>
</div>
<div class="clearfix"></div>
</div>
</div> 

        <!-- /.row -->
</div></div></div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->