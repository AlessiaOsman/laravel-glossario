<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Word extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slug'];

    // relazione many to many con tag

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function getFormattedDate($column, $format = 'd-m-Y')
    {

        return Carbon::create($this->$column)->format($format);
    }

    public function contentTruncate($column)
    {
        return Str::limit($this->$column, 20);
    }
    public function printImage()
    {
        return asset('storage/' . $this->image);
    }
}