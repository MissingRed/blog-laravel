<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    //Relación de uno a muchos inversa con usuario

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos con comentarios

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //Relación de uno a muchos inversa con categorias

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
