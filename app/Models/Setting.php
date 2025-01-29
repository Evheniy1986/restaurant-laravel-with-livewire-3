<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;

    public $translatable = ['key', 'value'];

    protected $fillable = [
        'key',
        'value',
    ];
}
