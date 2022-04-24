<?php

namespace App\Models;
use CodeIgniter\Model;

class AniACModel extends Model
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
        'animeuıd' => 'required|numeric|min_length[8]|max_length[8]|is_unique[anime.animeuıd]'
    ];
    protected $validationMessages = [
        'animeuıd' => [
            'required' => 'Required field.',
            'numeric' => 'Just numbers.',
            'min_length' =>  'Min 8 numbers.',
            'max_length' => 'Max 8 numbers.',
            'is_unique' => 'Need Unique numbers.',
        ]
    ];
    protected $skipValidation = false;

    public function getAnimeList(){

        $builder = $this->builder($this->table);
        $query = $builder->get();
        $builder = $builder->join('genre', 'genre.gbid = anime.animeuıd');
        $builder->orderBy('anime_name', 'DESC');
        $results = $query->getResultArray();
        return $results;
    }

}