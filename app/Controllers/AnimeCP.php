<?php

/**
 * ------------------
 * CODEIGNITER 4 -
 * ------------------
 *
 * admin and mod same page panel/panel.php
 * 
 * 
 * 
 */

namespace App\Controllers;

use App\Models\AnimeAddModel;

class AnimeCP extends BaseController
{

	public function animeadd()
	{
		echo view('templates/header');
		echo view('panel/acp/anime/animeadd');
		echo view('templates/footer');
	}

	public function __construct()
	{
		helper(['url']);
	}





	public function add()
	{
        $data = [
            'anime_name' =>$this->request->getVar('anime_name'),
            'genres' =>$this->request->getVar('genres[]')
        ];
        /*$db = \Config\Database::connect();
        $builder = $db->table('anime');
        
        $builder->insert($data);*/
        $model = new AnimeAddModel();
        $model->insert($data);
	}

}
