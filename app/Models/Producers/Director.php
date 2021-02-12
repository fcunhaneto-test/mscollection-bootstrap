<?php

namespace App\Models\Producers;

use App\Models\Movie;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $table = 'creators';
    public $timestamps = false;
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['director_movie'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class)->withPivot('order');
    }
}
