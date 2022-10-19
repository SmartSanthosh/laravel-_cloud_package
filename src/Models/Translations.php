<?php

namespace ProcessDrive\LaravelCloudTranslation\Models;

use App\Mail\PasswordGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class Translations extends Model
{

    public $translatable = ['text'];

    public $guarded = ['id'];

    public $table = 'translation';

    public $fillable = [
        'group',
        'key',
        'key',
        'text',
        'translated'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                    => 'integer',
        'group'                 => 'string',
        'key'                   => 'string',
        'text'                  => 'array',
        'translated'            => 'integer'
    ];

}
