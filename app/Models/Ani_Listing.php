<?php

namespace App\Models;

class Ani_Listing
{
    var $ıd;
    var $animeuıd;
    var $anime_name;
    var $anime_type;
    var $anime_genres;
    var $anime_years;
    var $anime_country;
    var $anime_img;
    var $anime_pv;
    var $anime_episode;
    var $anime_fansub;
    var $anime_website;
    var $anime_score;
    var $anime_prequel;
    var $anime_sequel;
    var $anime_status;
    var $anime_duration;
    var $anime_op;
    var $anime_ed;
    var $anime_synopsis;
    var $anime_time;

    function __construct($ıd, $animeuıd, $anime_type, $anime_genres, $anime_years, $anime_country, $anime_img, $anime_pv, $anime_episode, $anime_fansub, $anime_website, $anime_score, $anime_prequel, $anime_sequel, $anime_status, $anime_duration, $anime_op, $anime_ed, $anime_synopsis, $anime_time)
    {
        $this->ıd = $ıd;
        $this->animeuıd = $animeuıd;
        $this->anime_type = $anime_type;
        $this->anime_genres = $anime_genres;
        $this->anime_years = $anime_years;
        $this->anime_country = $anime_country;
        $this->anime_img = $anime_img;
        $this->anime_pv = $anime_pv;
        $this->anime_episode = $anime_episode;
        $this->anime_fansub = $anime_fansub;
        $this->anime_website = $anime_website;
        $this->anime_score = $anime_score;
        $this->anime_prequel = $anime_prequel;
        $this->anime_sequel = $anime_sequel;
        $this->anime_status = $anime_status;
        $this->anime_duration = $anime_duration;
        $this->anime_op = $anime_op;
        $this->anime_ed = $anime_ed;
        $this->anime_synopsis = $anime_synopsis;
        $this->anime_time = $anime_time;
    }
}

