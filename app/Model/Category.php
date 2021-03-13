<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','slug'];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
