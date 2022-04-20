<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - Anitium
 * --------------------------------------------------------------------
 *
 *  Burası Fansub Panel Gösterildiği Kısımdır.
 *  Routers üzerinden Role 1'de ayarları bulunmaktadır.
 *  Yölendirmeleri ise
 *  view/backend/fansub/fansub_main.php
 *  templates içinde ise footer ve header bulunmaktadır.
 *  Ayarlar için oraya bakabilirsiniz. 
 * 
 * 
 */

 namespace App\Controllers;

class FansubCP extends BaseController
{
	private $model;

	public function __construct(){
        $this->model = new \App\Models\FansubACModel();
	}

	public function fansub_main()   // Admin Sayfası İlk Kısmıdır.
	{

		$pager = \Config\Services::pager();
        $data = [
			'title' => 'Fansub Listing',
            'fansub' => $this->model->paginate(3),
            'pager' => $this->model->pager,
			'isi' => 'v_listing',
		];


		echo view('backend/admin/templates/header');
		echo view('backend/fansub/fansub_main', $data);
		echo view('backend/admin/templates/footer');
		return;
	}

       // Anime Ekleme/Silme/Güncelleme/Listeleme kısmı başlayacak.  View/backend/admin/anime
   public function fansub_add()
   {
	   $data = [];

	   echo view('backend/admin/templates/header', $data);
	   echo view('backend/fansub/fansub_add');
	   echo view('backend/admin/templates/footer');
   }

   public function fansub__add() // routers içinde anime_add/add kısmına aittir.
   {
		$data = array(
			'fansub_name' =>$this->request->getVar('fansub_name'),
			'fansub_web' =>$this->request->getVar('fansub_web'),
			'fansub_lnk' =>$this->request->getVar('fansub_lnk'),
		);

		$this->model->insert($data);
        return $this->response->redirect(site_url('/admin/fansub/index'));

   }
   



	//Bu Fuction ile  "fansub_update/"fansub_ıd" bulup direk diğer fuction olan "fansub__update" ile güncelliyor.
	public function fansub_update($fansub_ıd = null){ // routers içinde anime_add/add kısmına aittir.
        {
    
            $data['fansub_obj'] = $this->model->where('fansub_ıd', $fansub_ıd)->first();
             echo view('backend/admin/templates/header');
             echo view('backend/fansub/fansub_update', $data);
             echo view('backend/admin/templates/footer');
    
    
            }
    
        }
    
        // fansub__update sql güncelleme kısmıdır
        public function fansub__update()
        {
    
             $fansub_ıd = $this->request->getVar('fansub_ıd');
             $data = array(
                'fansub_name' =>$this->request->getVar('fansub_name'),
                'fansub_web' =>$this->request->getVar('fansub_web'),
                'fansub_lnk' =>$this->request->getVar('fansub_lnk')
             );
     
             $this->model->update($fansub_ıd, $data);
             return $this->response->redirect(site_url('/admin/fansub/index'));
    
    
             echo view('backend/admin/templates/header');
             echo view('backend/fansub/fansub_update');
             echo view('backend/admin/templates/footer');
    
        }


       // Anime Listing'ten tuş basınca anime_delete fuction çalıştırıyor. 
	   public function fansub_delete($fansub_ıd = null){
        $data['fansub'] = $this->model->where('fansub_ıd', $fansub_ıd)->delete($fansub_ıd);
        return $this->response->redirect(site_url('/admin/fansub/index'));
    
	}   




}
