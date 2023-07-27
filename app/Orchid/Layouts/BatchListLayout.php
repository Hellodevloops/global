<?php

namespace App\Orchid\Layouts;

use App\Models\Batch;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;
class BatchListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'batchs';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('batch')
   ->sort()
   ->filter(Input::make()) ->sort()
   ->render(function (Batch $batch) {
       return Link::make($batch->course_name)->route('platform.batch.edit', $batch);
   }),

   TD::make('created_at', __('Created'))
   ->sort()
   ->render(fn (Batch $batch) => $batch->created_at->toDateTimeString()),
   TD::make('updated_at', __('updated_at'))
   ->sort()
   ->render(fn (Batch $batch) => $batch->created_at->toDateTimeString()),
               
             
                TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Batch $batch) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
    
                            Link::make(__('View'))
                                ->route('platform.batch.edit', $batch)
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