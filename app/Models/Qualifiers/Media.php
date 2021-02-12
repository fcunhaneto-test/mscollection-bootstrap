<?php

namespace App\Models\Qualifiers;

use App\Models\Movie;
use App\Models\Series;
use App\Models\Season;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $table = 'media';
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class)->withPivot('active', 'slug');
    }

    public function series()
    {
        return $this->belongsToMany(Series::class)->withPivot('active', 'slug');
    }

    public function seasons()
    {
        return $this->belongsToMany(Season::class)->withPivot('active', 'slug');
    }

    public function isStreams()
    {
        return $this->where('isstream', '=', true)->get();
    }

    public function mediaName($channel) {
        return $this->where('slug', '=', $channel)->select('name')->first();
    }
}
