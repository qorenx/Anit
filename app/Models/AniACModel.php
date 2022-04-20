<?php

namespace App\Models;
use CodeIgniter\Model;

class AniACModel extends Model
{
    protected $table = 'anime'; // tablo adı
    protected $primaryKey = 'ıd'; // daimi ıd


    protected $useSoftDeletes = false; 
    protected $allowedFields = [
        'animeuıd',
        'anime_name',
        'anime_name_atf',
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
        'anime_time',
    ]; // Kullanılmasına izin verilen sütunlar

}
