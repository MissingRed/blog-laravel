<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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

    //Relación de uno a muchos inversa con articulo

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
