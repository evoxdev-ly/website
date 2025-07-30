<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'home_id',
        'image',
        'title',
        'description',
        'link'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }
}
