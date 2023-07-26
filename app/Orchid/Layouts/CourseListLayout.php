<?php

namespace App\Orchid\Layouts;

use App\Models\Course;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;
class CourseListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'courses';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
   ->sort()
   ->filter(Input::make()) ->sort()
   ->render(function (Course $course) {
       return Link::make($course->title)->route('platform.course.edit', $course);
   }),

   TD::make('created_at', __('Created'))
   ->sort()
   ->render(fn (Course $course) => $course->created_at->toDateTimeString()),
   TD::make('updated_at', __('updated_at'))
   ->sort()
   ->render(fn (Course $course) => $course->created_at->toDateTimeString()),
               
             
                TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Course $course) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
    
                            Link::make(__('View'))
                                ->route('platform.course.edit', $course)
                                ->icon('eye'),
    
                            // Button::make(__('Delete'))
                            //     ->icon('trash')
                            //     ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            //     ->method('remove', [
                            //         'id' => $contact->id,
                            //     ]),
                        ]);
                }),
        ];
    }
}