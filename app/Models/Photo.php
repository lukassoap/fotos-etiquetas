<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; //esto permite que la tabla en [plural funcione con el modelo emn singular]

class Photo extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title', 'url'];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
