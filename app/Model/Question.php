<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;



class Question extends Model
{
   /*
    public function getRouteKeyName()//Clé de recherche
    {
        return 'slug';
    }
*/
protected $fillable = ['title','slug','body','user_id','category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function getPathAttribute(){
        return asset("api/question/$this->id");
    }

}
