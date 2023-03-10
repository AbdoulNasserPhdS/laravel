<?php

namespace Modules\Blog\Entities;

use Modules\Blog\Entities\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected $guarded=[];

    
    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\CategoryFactory::new();
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
