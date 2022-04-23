<?php 
 namespace App\Controllers;
use App\Controllers;

class AnimeAC extends BaseController
{
	private $model;

	public function __construct(){
		$this->model = new \App\Models\AniACModel();
		$this->model2 = new \App\Models\AniACModel2();
		
	}

	public function anime_listing() // Anime Listing Sayfasının Çağrılarının Yapıldığı Yer
	{

		 $data = [];
		 $this->model->getAnimeList();
		 $pager = \Config\Services::pager();
		 $data['listdata'] = $this->model->paginate(5); 
		 $data['pager'] = $this->model->pager;

		echo view('backend/admin/templates/header', $data);
		echo view('backend/admin/anime/anime_listing');
		echo view('backend/admin/templates/footer');
		return;

    }
	//Bu Fuction ile  "anime_update/"AnimeID" bulup direk diğer fuction olan "anime__update" ile güncelliyor.
	public function anime_update($animeuıd = null){ // routers içinde anime_add/add kısmına aittir.
		{
	
			$data['anime_obj'] = $this->model->where('animeuıd', $animeuıd)->first();
			 echo view('backend/admin/templates/header');
			 echo view('backend/admin/anime/anime_update', $data);
			 echo view('backend/admin/templates/footer');
	
			}
	
	
	
		}
	
		// anime_update fuction gelen sayfadaki veriyi güncellerken son işlem hallediyor.
		public function anime__update($animeuıd = null) // routers içinde anime_add/add kısmına aittir.
		{
	
			 $animeuıd = $this->model->where('animeuıd', $animeuıd)->first();
			 $data = array(
				'anime_name' =>$this->request->getVar('anime_name'),
				'anime_name_atf' =>$this->request->getVar('anime_name_atf'),
				'anime_type' =>$this->request->getVar('anime_type'),
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
	 
			 $this->model->update($animeuıd, $data);
			 return $this->response->redirect(site_url('/admin/anime/anime_listing'));
	
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
			$data2 = array(
				'gbid' =>$this->request->getVar('animeuıd'),
			);

			$this->model->insert($data);
			$this->model2->insert($data2);

			$error = $this->model->errors();
	
			if (!$error) {
				return $this->response->redirect(site_url('/admin/anime/anime_listing')
			);} 
				else {
				return $this->response->setJSON([
					'Errors' => $error,
				]);
			}

	   }
	
		   // Anime Listing'ten tuş basınca anime_delete fuction çalıştırıyor. 
		public function anime_delete($animeuıd){
			
			if(empty($animeuıd))
			{
				return false;  //oops, no data for 'where' to use
			}
			$this->model->where('animeuıd', (int) $animeuıd)->delete();

			return $this->response->redirect(site_url('/admin/anime/anime_listing'));
		
		}    
	





	//Bu Fuction ile  "anime_update/"AnimeID" bulup direk diğer fuction olan "anime__update" ile güncelliyor.
	public function anime_genre($animeuıd = null){ // routers içinde anime_add/add kısmına aittir.
		{
	
			$data['anime_obj'] = $this->model2->where('gbid', $animeuıd)->first();
			 echo view('backend/admin/templates/header');
			 echo view('backend/admin/anime/anime_genre', $data);
			 echo view('backend/admin/templates/footer');
	
	
			}
	
		}
	


		// anime_update fuction gelen sayfadaki veriyi güncellerken son işlem hallediyor.
		public function anime__genre() // routers içinde anime_add/add kısmına aittir.
		{
	
			 $gıd = $this->request->getVar('gıd');
			 $data = array(
				'genre_action' =>$this->request->getVar('genre_action'),
				'genre_adventure' =>$this->request->getVar('genre_adventure'),
				'genre_comedy' =>$this->request->getVar('genre_comedy'),
				'genre_demons' =>$this->request->getVar('genre_demons'),
				'genre_detective' =>$this->request->getVar('genre_detective'),
				'genre_drama' =>$this->request->getVar('genre_drama'),
				'genre_ecchi' =>$this->request->getVar('genre_ecchi'),
				'genre_fantasy' =>$this->request->getVar('genre_fantasy'),
				'genre_game' =>$this->request->getVar('genre_game'),
				'genre_harem' =>$this->request->getVar('genre_harem'),
				'genre_hentai' =>$this->request->getVar('genre_hentai'),
				'genre_history' =>$this->request->getVar('genre_history'),
				'genre_horror' =>$this->request->getVar('genre_horror'),
				'genre_isekai' =>$this->request->getVar('genre_isekai'),
				'genre_josei' =>$this->request->getVar('genre_josei'),
				'genre_magic' =>$this->request->getVar('genre_magic'),
				'genre_martialart' =>$this->request->getVar('genre_martialart'),
				'genre_mecha' =>$this->request->getVar('genre_mecha'),
				'genre_military' =>$this->request->getVar('genre_military'),
				'genre_music' =>$this->request->getVar('genre_music'),
				'genre_mystery' =>$this->request->getVar('genre_mystery'),
				'genre_mythology' =>$this->request->getVar('genre_mythology'),
				'genre_parody' =>$this->request->getVar('genre_parody'),
				'genre_police' =>$this->request->getVar('genre_police'),
				'genre_psychological' =>$this->request->getVar('genre_psychological'),
				'genre_romance' =>$this->request->getVar('genre_romance'),
				'genre_school' =>$this->request->getVar('genre_school'),
				'genre_scifi' =>$this->request->getVar('genre_scifi'),
				'genre_seinen' =>$this->request->getVar('genre_seinen'),
				'genre_shoujo' =>$this->request->getVar('genre_shoujo'),
				'genre_shounen' =>$this->request->getVar('genre_shounen'),
				'genre_space' =>$this->request->getVar('genre_space'),
				'genre_sports' =>$this->request->getVar('genre_sports'),
				'genre_supernatural' =>$this->request->getVar('genre_supernatural'),
				'genre_vampire' =>$this->request->getVar('genre_vampire'),
				'genre_yaoi' =>$this->request->getVar('genre_yaoi'),
				'genre_yuri' =>$this->request->getVar('genre_yuri')
		
			 );
	 
			 $this->model2->update($gıd, $data);
			 return $this->response->redirect(site_url('/admin/anime/anime_listing'));
	
	
			 echo view('backend/admin/templates/header');
			 echo view('backend/admin/anime/anime_genre');
			 echo view('backend/admin/templates/footer');
	
		}
	
	
	
	}