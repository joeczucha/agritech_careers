<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'linkedin_profile',
        'phone',
        'location',
        'cover_note',
        'attachments'
    ];

    protected $casts = [
        'attachments' => 'array',
    ];
}
