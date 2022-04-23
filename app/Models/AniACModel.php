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
        'anime_years',
        'anime_country',
        'anime_img',
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
        'animeuıd' => 'required|numeric|min_length[16]|max_length[18]|is_unique[anime.animeuıd]',
        'anime_name' => 'required|is_unique[anime.anime_name]',
        'anime_years' => 'required|numeric|min_length[4]|max_length[4]',
        'anime_img' => 'required',
        'anime_episode' => 'required|numeric|min_length[1]|max_length[4]',
        'anime_score' => 'required|numeric|min_length[1]|max_length[3]',
        'anime_duration' => 'required|min_length[1]|max_length[10]',
        'anime_synopsis' => 'required'
    ];
    protected $validationMessages = [
        'animeuıd' => [
            'required' => 'Required field.',
            'numeric' => 'Just numbers.',
            'min_length' =>  'Min 16 numbers.',
            'max_length' => 'Max 18 numbers.',
            'is_unique' => 'Need Unique numbers.',
        ],
        'anime_name' => [
            'required' => 'Required field.',
            'is_unique' => 'There are different series with the same name.',
        ],
        'anime_years' => [
            'required' => 'Required field.',
        ],
        'anime_img' => [
            'required' => 'Required field.',
        ],
        'anime_episode' => [
            'required' => 'Required field.',
            'numeric' => 'Just numbers.',
            'min_length' =>  'Min 1 numbers.',
            'max_length' => 'Max 4 numbers.',
        ],
        'anime_score' => [
            'required' => 'Required field.',
            'numeric' => 'Just numbers.',
            'min_length' =>  'Min 1 numbers.',
            'max_length' => 'Max 3 numbers.',
        ],
        'anime_duration' => [
            'required' => 'Required field.',
            'numeric' => 'Just numbers.',
            'min_length' =>  'Min 1 numbers.',
            'max_length' => 'Max 10 numbers.',
        ],
        'anime_synopsis' => [
            'required' => 'Required field.',
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