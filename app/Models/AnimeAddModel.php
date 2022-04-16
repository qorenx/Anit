<?php


/**
 * ---------------------------
 * CODEIGNITER 4 -Anitium
 * ---------------------------
 *
 * Animeleri Datebase
 *
 *
 * 
 * 
 */


namespace App\Models;

use CodeIgniter\Model;

class AnimeAddModel extends Model
{
	protected $table      = 'anime';

	protected $primaryKey = 'id';

	protected $returnType = 'array';

	protected $allowedFields = ['anime_name', 'alternative_name', 'type', 'status', 'score', 'episodes', 'genres', 'video_pv', 'fansub', 'prequel', 'sequel', 'myanimelist', 'anilist', 'anime_image', 'offical_website', 'description', 'created'];
}				