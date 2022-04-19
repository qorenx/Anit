<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4 - Anitium
 * --------------------------------------------------------------------
 *
 * 
 * 
 */

 namespace App\Controllers;

 use App\Models\Ani_Listing;

class AnimeListing extends BaseController
{

public function anime_listing() // Anime Listing Sayfasının Çağrılarının Yapıldığı Yer
   {
	   $data = [];

	   echo view('backend/admin/templates/header', $data);
	   echo view('backend/admin/anime/anime_listing');
	   echo view('backend/admin/templates/footer');
   }



   public function anime__listing()  // Anime Listelerken DP bağlantılı olacak kısım.  AnimeModel "AnimeListing" adındaki class çağırlıyor. 
   {
	$AniListing = array(
		new Ani_Listing('p01'),

	);
	$data['AniListing'] = $AniListing;
	return view('anime/anime_listing', $data);


   }

}
