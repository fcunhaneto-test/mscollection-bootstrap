<?php

namespace App\Models;

use App\Models\Producers\Director;
use App\Models\Qualifiers\Media;
use App\Traits\TitlesModel;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $table = 'movies';
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['director_movie'];
//    protected $arrLetterExist = [];

    public function media()
    {
        return $this->belongsToMany(Media::class)->withPivot('active', 'slug');
    }

    public function directors()
    {
        return $this->belongsToMany(Director::class)->withPivot('order');
    }
}
