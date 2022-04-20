<?php 
 namespace App\Controllers;
 use App\Controllers\BaseController;

class AdminAC extends BaseController
{
	private $model;

	public function __construct(){
		$this->model = new \App\Models\AniACModel();
	}

	public function anime_listing() // Anime Listing Sayfasının Çağrılarının Yapıldığı Yer
	{

		$anime = $this->model->findAll();
		$anime = array('anime'=>$anime);
		view('backend/admin/anime/anime_listing',$anime);



		$data = [];
		echo view('backend/admin/templates/header', $data);
		echo view('backend/admin/anime/anime_listing');
		echo view('backend/admin/templates/footer');
		return;

    }

}