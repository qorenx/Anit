<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php foreach ($anime as $key => $value) { ?>



<div class="list-group">
    <a href="#" class="list-group-item active">
        <p class="list-group-item-text"><?= $value ['ıd'] ?></p>
    </a>
</div>



<div clas="col-md-12">
<div class="text-canter">
<?= $pager->links() ?>
</div></div>

<?php } ?>