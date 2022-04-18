<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimeModel extends Model
{
    protected $table = 'anime'; // tablo adı
    protected $primaryKey = 'ıd'; // daimi ıd

    protected $returnType = 'object';
    protected $useSoftDeletes = true; 
    protected $allowedFields = [
        'animeuıd',
        'anime_name',
        'anime_type',
        'anime_genres',
        'anime_years',
        'anime_country',
        'anime_img',
        'anime_pv',
        'anime_episode',
        'anime_fansub',
        'anime_website',
        'anime_score',
        'anime_prequel',
        'anime_sequel',
        'anime_status',
        'anime_duration',
        'anime_op',
        'anime_ed',
        'anime_synopsis',
    ]; // Kullanılmasına izin verilen sütunlar

}