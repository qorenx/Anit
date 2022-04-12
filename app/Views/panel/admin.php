<div style="margin-top:70px" class="container">
    <div class="row">
        <div class="col-12 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container text-center">
                <h1> Welcome To Admin </h1>

                <h4><?= session()->get('firstname') ?> <?= session()->get('lastname') ?></h4>
                <div>
                     <a class="btn btn-lg btn-default" href="/admin/panel" role="button">Anime Panel</a>
                </div>
            </div>
        </div>
    </div>
</div>
