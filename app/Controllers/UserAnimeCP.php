<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4
 * --------------------------------------------------------------------
 *
 *  Herkesin animelere eriştiği paneldir. 
 *  
 *
 * 
 */

namespace App\Controllers;



class UserAnimeCP extends BaseController
{
	private $model;

	public function __construct(){
        $this->model = new \App\Models\UserAnimeModel();

	}


	public function index() // Anime Listing Sayfasının Çağrılarının Yapıldığı Yer
	{
    $data = [];
    $this->model->getAllAnimeList();
    $pager = \Config\Services::pager();
    $data['listdata'] = $this->model->paginate(10); 
    $data['pager'] = $this->model->pager;

   echo view('frontend/templates/header', $data);
   echo view('frontend/anime/tv_anime');
   echo view('frontend/templates/footer');
   return;
    }


    public function anime_main() // Anime Listing Sayfasının Çağrılarının Yapıldığı Yer
	{

   echo view('frontend/templates/m_header');
   echo view('frontend/anime/anime_main');
   echo view('frontend/templates/footer');
   return;
    }


}
