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
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use AsSource, Attachable , HasSlug;

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

    public function author_name()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title') // change 'title' to the column you want to use as a basis for the slug
            ->saveSlugsTo('slug');
    }

}

