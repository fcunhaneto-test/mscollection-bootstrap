<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function seasons()
    {
        return $this->belongsTo(Season::class);
    }
}
