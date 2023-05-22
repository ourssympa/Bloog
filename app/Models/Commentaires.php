<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commentaires extends Model
{
    use HasFactory;

    protected $fillable=["content","user","post"];

    public function User():BelongsTo
    {
        return $this->belongsTo(User::class,"user","id");
    }

   
}
