<?php

namespace App\Models;
use CodeIgniter\Model;

class AniACModel2 extends Model
{
    protected $table = 'genre'; // tablo adı
    protected $primaryKey = 'gıd'; // daimi ıd


    protected $useSoftDeletes = false; 
    protected $allowedFields = [
        'gbid',
        'gname',
        'genre_action',
        'genre_adventure',
        'genre_comedy',
        'genre_demons',
        'genre_detective',
        'genre_drama',
        'genre_ecchi',
        'genre_fantasy',
        'genre_game',
        'genre_harem',
        'genre_hentai',
        'genre_history',
        'genre_horror',
        'genre_isekai',
        'genre_josei',
        'genre_magic',
        'genre_martialart',
        'genre_mecha',
        'genre_military',
        'genre_music',
        'genre_mystery',
        'genre_mythology',
        'genre_parody',
        'genre_police',
        'genre_psychological',
        'genre_romance',
        'genre_school',
        'genre_scifi',
        'genre_seinen',
        'genre_shoujo',
        'genre_shounen',
        'genre_space',
        'genre_sports',
        'genre_supernatural',
        'genre_vampire',
        'genre_yaoi',
        'genre_yuri',
    ]; // Kullanılmasına izin verilen sütunlar

}
