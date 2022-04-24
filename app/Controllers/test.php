<?php


namespace App\Controllers;
use App\Controllers;

class test extends BaseController
{

	private $model;

	public function __construct(){
	$this->model = new \App\Models\AniACModel();

 	}


	public function index()
	{

		echo view('backend/admin/templates/header');
        echo view('test');
		echo view('backend/admin/templates/footer');
        
    }

	public function anime_update() // routers içinde anime_add/add kısmına aittir.
	   {
			$data = array(
				'anime_name' =>$this->request->getVar('anime_name'),
				'anime_name_atf' =>$this->request->getVar('anime_name_atf'),
				'animeuıd' =>$this->request->getVar('animeuıd'),
				'anime_type' =>$this->request->getVar('anime_type'),
				'anime_subdub' =>$this->request->getVar('anime_subdub'),
				'anime_years' =>$this->request->getVar('anime_years'),
				'anime_country' =>$this->request->getVar('anime_country'),
				'anime_img' =>$this->request->getVar('anime_img'),
				'anime_wall' =>$this->request->getVar('anime_wall'),
				'anime_pv' =>$this->request->getVar('anime_pv'),
				'anime_episode' =>$this->request->getVar('anime_episode'),
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

			$this->model->update($data);

	   }

}
