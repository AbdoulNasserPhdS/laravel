<?php

namespace Modules\Blog\Entities;

use App\Models\User;
use Modules\Blog\Entities\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected $guarded=[];


    public static function boot(){

        parent::boot();

        self::creating(function($post){
            //on associe le post au utilisateur et à la category
            $post->user()->associate(auth()->user()->id);
            $post->category()->associate(request()->category);

        });

        self::updating(function($post){
            //on associe le post au utilisateur et à la category
            // $post->user()->associate(auth()->user()->id);
            $post->category()->associate(request()->category);

        });



    }

    

    
    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\PostFactory::new();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
