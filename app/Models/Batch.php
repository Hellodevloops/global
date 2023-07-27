<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Orchid\Filters\Types\Like;

class Batch extends Model
{
    use AsSource, Attachable, Filterable;

     /**
     * @var array
     */
    protected $fillable = [
        'course_name',
        'duration',
        'launch_date',
        'timings',
        // 'hero',
    ];
    
}
