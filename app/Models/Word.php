<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description'];

    // relazione many to many con tag

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
