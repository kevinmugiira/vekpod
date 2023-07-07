<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'podcast_id',
        'description'
    ];

//    public function podcast()
//    {
//        return $this->hasMany(Podcast::class, 'podcast_id', 'id');
//    }

    public function episode()
    {
        return $this->hasMany(Episode::class, 'episode_id', 'id');
    }
}
