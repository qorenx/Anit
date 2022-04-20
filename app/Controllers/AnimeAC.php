<?php 
 namespace App\Controllers;
 use App\Controllers;

class AnimeAC extends BaseController
{
	private $model;

	public function __construct(){
		$this->model = new \App\Models\AniACModel();
	}

	public function anime_listing() // Anime Listing Sayfasının Çağrılarının Yapıldığı Yer
	{


		$pager = \Config\Services::pager();
        $data = [
			'title' => 'Anime Listing',
            'anime' => $this->model->paginate(3),
            'pager' => $this->model->pager,
			'isi' => 'v_listing',
		];

		echo view('backend/admin/templates/header');
		echo view('backend/admin/anime/anime_listing', $data);
		echo view('backend/admin/templates/footer');
		return;

    }

	public function index()
    {

		$pager = \Config\Services::pager();
        $data = [
			'title' => 'Anime Listing',
            'anime' => $this->model->paginate(1),
            'pager' => $this->model->pager,
			'isi' => 'v_listing',
		];
        echo view('backend/admin/anime/anime_listing', $data);
    }

}