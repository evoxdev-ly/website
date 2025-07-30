<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'home_id',
        'title',
        'description',
        'link'
    ];

    public function home()
    {
        return $this->belongsTo(Home::class);
    }
}
