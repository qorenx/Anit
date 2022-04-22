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

	//--------------------------------------------------------------------

}
