<!-- Main content -->
<div class="content">
<div class="container-fluid">

<section class="block_area block_area_category">
</div>
<div class="tab-content">
<div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
<b class="film_list-wrap">
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


<div class="clearfix"></div>

</b>
</div>
</div>
</section>

        <!-- /.row -->
      </div>
    </div>
  </div>
<?= $pager->links() ?>

    <!-- /.content -->

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->