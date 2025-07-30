<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'logo_header',
        'logo_footer',
        'about_us',
        'phone',
        'contact_email',
        'metatag_description',
        'metatag_keywords',

        'smtp_host',
        'smtp_port',
        'smtp_username',
        'smtp_password',
        'smtp_encryption',
        'smtp_from_address',
        'smtp_from_name',
        'email_receiver',

        'social_facebook',
        'social_instagram',
        'social_linkedin',
        'social_twitter',
        'social_youtube',
        'social_github',
        'social_whatsapp',
        'whatsapp_floating',
        
        'head',
        'script'
    ];
}
