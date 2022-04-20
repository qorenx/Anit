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

	//Bu Fuction ile  "anime_update/"AnimeID" bulup direk diğer fuction olan "anime__update" ile güncelliyor.
	public function anime_update($ıd = null){ // routers içinde anime_add/add kısmına aittir.
	{

		$data['anime_obj'] = $this->model->where('ıd', $ıd)->first();
		 echo view('backend/admin/templates/header');
		 echo view('backend/admin/anime/anime_update', $data);
		 echo view('backend/admin/templates/footer');


		}



	}

	// anime_update fuction gelen sayfadaki veriyi güncellerken son işlem hallediyor.
	public function anime__update() // routers içinde anime_add/add kısmına aittir.
	{

		 $ıd = $this->request->getVar('ıd');
		 $data = array(
			'anime_name' =>$this->request->getVar('anime_name'),
			'anime_name_atf' =>$this->request->getVar('anime_name_atf'),
			'anime_type' =>$this->request->getVar('anime_type'),
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
 
		 $this->model->update($ıd, $data);
		 return $this->response->redirect(site_url('/admin/anime/anime_listing'));


		 echo view('backend/admin/templates/header');
		 echo view('backend/admin/anime/anime_update');
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
			'anime_name_atf' =>$this->request->getVar('anime_name_atf'),
			'animeuıd' =>$this->request->getVar('animeuıd'),
			'anime_type' =>$this->request->getVar('anime_type'),
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

       // Anime Listing'ten tuş basınca anime_delete fuction çalıştırıyor. 
	   public function anime_delete($ıd = null){
        $data['anime'] = $this->model->where('ıd', $ıd)->delete($ıd);
        return $this->response->redirect(site_url('/admin/anime/anime_listing'));
    }    




}