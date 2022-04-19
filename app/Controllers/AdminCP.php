<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - Anitium
 * --------------------------------------------------------------------
 *
 *  Burası Admin Panel Gösterildiği Kısımdır.
 *  Routers üzerinden Role 1'de ayarları bulunmaktadır.
 *  Yölendirmeleri ise
 *  view/backend/admin/admin_home.php
 *  templates içinde ise footer ve header bulunmaktadır.
 *  Ayarlar için oraya bakabilirsiniz. 
 * 
 * 
 */

 namespace App\Controllers;

class AdminCP extends BaseController
{
	private $model;

	public function __construct(){
		$this->model = new \App\Models\AnimeModel();
	}

	public function index()   // Admin Sayfası İlk Kısmıdır.
	{
		$data = [];

		echo view('backend/admin/templates/header', $data);
		echo view('backend/admin/admin_home');
		echo view('backend/admin/templates/footer');
	}

   // Anime Ekleme/Silme/Güncelleme/Listeleme kısmı başlayacak.  View/backend/admin/anime
   public function anime_add()
   {
	   $data = [];

	   echo view('backend/admin/templates/header', $data);
	   echo view('backend/admin/anime/anime_add');
	   echo view('backend/admin/templates/footer');
   }

   public function anime__add() // routers içinde anime_add/add kısmına aittir.
   {
		$data = array(
			'anime_name' =>$this->request->getVar('anime_name'),
			'animeuıd' =>$this->request->getVar('animeuıd'),
			'anime_type' =>implode(',',$this->request->getVar('anime_type')),
			'anime_genres' =>implode(',',$this->request->getVar('anime_genres')),
			'anime_years' =>$this->request->getVar('anime_years'),
			'anime_country' =>$this->request->getVar('anime_country'),
			'anime_img' =>$this->request->getVar('anime_img'),
			'anime_pv' =>$this->request->getVar('anime_pv'),
			'anime_episode' =>$this->request->getVar('anime_episode'),
			'anime_fansub' =>implode(',',$this->request->getVar('anime_fansub')),
			'anime_website' =>$this->request->getVar('anime_website'),
			'anime_score' =>$this->request->getVar('anime_score'),
			'anime_prequel' =>$this->request->getVar('anime_prequel'),
			'anime_sequel' =>$this->request->getVar('anime_sequel'),
			'anime_status' =>$this->request->getVar('anime_status'),
			'anime_duration' =>$this->request->getVar('anime_duration'),
			'anime_op' =>$this->request->getVar('anime_op'),
			'anime_ed' =>$this->request->getVar('anime_ed'),
			'anime_synopsis' =>$this->request->getVar('anime_synopsis')
	
		);

		$this->model->insert($data);
		$hatalar = $this->model->errors();

        if (!$hatalar) {
            return $this->response->setJSON([
                'kullanici' => $data,
                'mesaj' => 'İşlem başarılı bir şekilde tamamlandı.',
            ]);
        } else {
            return $this->response->setJSON([
                'hatalar' => $hatalar,
            ]);
        }
   }



   public function anime_delete()
   {
	   $data = [];

	   echo view('backend/admin/templates/header', $data);
	   echo view('backend/admin/anime/anime_delete');
	   echo view('backend/admin/templates/footer');
   }
   public function anime_listing()
   {
	   $data = [];

	   echo view('backend/admin/templates/header', $data);
	   echo view('backend/admin/anime/anime_listing');
	   echo view('backend/admin/templates/footer');
   }
   public function anime_update()
   {
	   $data = [];

	   echo view('backend/admin/templates/header', $data);
	   echo view('backend/admin/anime/anime_update');
	   echo view('backend/admin/templates/footer');
   }

}
