<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    
    protected $fillable = ['title', "description", "extrait","picture"];

    // protected $guarded = [''];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post', 'id');
    }

    public function countComments()
    {
        // On utilise bien ici un attribut comments et pas la fonction comments() du modele Post car ça retourne une relation et
        // car laravel transforme la focntion du modele en attribut 
        $count = sizeof($this->comments);
        return $count;
    }
}
