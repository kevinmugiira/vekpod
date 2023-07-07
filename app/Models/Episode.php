<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';

    protected $fillable = [
        'name',
        'cover_image',
        'description',
        'podcast_name',
        'category_id',
        'author',
        'file_path',
        'trending'
    ];

    public function podcast()
    {
        return $this->belongsTo(Podcast::class, 'podcast_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_id', 'id');
    }
}
