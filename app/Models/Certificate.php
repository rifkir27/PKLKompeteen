<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'template_certificate';

    protected $fillable = [
        'name',
        'template_html',
        'template_css',
    ];
}
