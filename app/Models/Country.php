<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Filters\Types\Like;
use App\Models\Contact;
use App\Models\User;

class Country extends Model
{
    use AsSource, Attachable, Filterable;
    protected $table = 'countries';

    protected $fillable = [
        'title',
        'hero',
        'description',
        'type',
        'body',
        'author',
    ];
     /**
     * Name of columns to which HTTP sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];

    protected $allowedFilters = [
        'title' => Like::class,
    ];

    public function author_name()
    {
        return $this->belongsTo(User::class, 'author');
    }

}
