<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $table = 'podcasts';

    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_id', 'id');
    }

    public function episode()
    {
        return $this->hasMany(Episode::class, 'episode_id', 'id');
    }
}
