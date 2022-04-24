<?php

namespace App\Models;
use CodeIgniter\Model;

class UserAnimeModel extends Model
{
    protected $table = 'anime'; // tablo adı
    protected $primaryKey = 'ıd'; // daimi ıd

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'animeuıd',
        'anime_name',
        'anime_name_atf',
        'anime_type',
        'anime_subdub',
        'anime_years',
        'anime_country',
        'anime_img',
        'anime_wall',
        'anime_pv',
        'anime_episode',
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

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [

    ];
    protected $validationMessages = [

    ];
    protected $skipValidation = false;

    public function getAllAnimeList(){

        $builder = $this->builder($this->table);
        $query = $builder->get();
        $builder = $builder->join('genre', 'genre.gbid = anime.animeuıd');
        $builder->orderBy('anime_name', 'DESC');
        $results = $query->getResultArray();
        return $results;
    }

    public function getAnime($getanime)  /// Fuck you mysql.
    {
        $builder = $this->builder($this->table);   
        $builder = $builder->where('animeuıd', $getanime);
        $builder = $builder->join('genre', 'genre.gbid = anime.animeuıd');
        $query = $builder->get();
        return $query;
    }


}