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

class Course extends Model
{
    use AsSource, Attachable, Filterable;

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero',
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

    // public function attachments()
    // {
    //     return $this->hasMany(Attachment::class, 'post_id');
    // }
}
