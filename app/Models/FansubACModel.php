<?php

namespace App\Models;
use CodeIgniter\Model;

class FansubACModel extends Model
{
    protected $table = 'fansub'; // tablo adı
    protected $primaryKey = 'fid'; // daimi ıd


    protected $useSoftDeletes = false; 
    protected $allowedFields = [
        'fud',
        'fansub_name',
        'fansub_web',
        'fansub_lnk',
        'fansub_date',
    ]; // Kullanılmasına izin verilen sütunlar

}
