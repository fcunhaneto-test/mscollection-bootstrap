<?php

namespace App\Models\Cast;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $table = 'characters';
    public $timestamps = false;
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['cast'];
}
