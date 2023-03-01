<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'accent_color', 'bg_color'];


    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
