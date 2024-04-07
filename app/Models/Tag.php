<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'color'];
    // relazione many to many con word
    public function words()
    {
        return $this->belongsToMany(Word::class);
    }
}