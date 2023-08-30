<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Filters\Types\Like;
use App\Models\Contact;
use App\Models\User;
class Service extends Model
{
    use AsSource, Attachable;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
    
        'description',
        'body',
        'author',
        'hero',
        'icon',
        'icon_class',

    ];
}

