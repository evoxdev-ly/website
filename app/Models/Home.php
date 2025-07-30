<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Home extends Model
{
    protected $table = 'home';

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_description',
        'mission_title',
        'mission_text',
        'vision_title',
        'vision_text',
        'value_title',
        'value_text'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
