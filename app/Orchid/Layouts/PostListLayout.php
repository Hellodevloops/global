<?php

namespace App\Orchid\Layouts;

use App\Models\Post;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;
class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'posts';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title')
   ->sort()
   ->filter(Input::make()) ->sort()
   ->render(function (Post $post) {
       return Link::make($post->title)->route('platform.post.edit', $post);
   }),

   TD::make('created_at', __('Created'))
   ->sort()
   ->render(fn (post $post) => $post->created_at->toDateTimeString()),
   TD::make('updated_at', __('updated_at'))
   ->sort()
   ->render(fn (post $post) => $post->created_at->toDateTimeString()),


                TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Post $post) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('View'))
                                ->route('platform.post.edit', $post)
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
