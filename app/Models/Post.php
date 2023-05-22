<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

     protected $fillable =[
        "auteur",
        "titre",
        "content",
        "image",
        "categorie"
     ];

     public function Categorie( ):BelongsTo
     {
        return $this->belongsTo(
            Categorie::class,'categorie','id'
        );
     }

     public function Commentaire():HasMany
     {
        return $this->hasMany(Commentaires::class,"post",'id');
     }
}
