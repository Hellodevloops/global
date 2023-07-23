<?php

namespace App\Orchid\Layouts;

use App\Models\Contact;
use Illuminate\Http\Request;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Alert;

class ContactListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'contact';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        
        return [
            TD::make('name', 'First Name')
                ->render(function (Contact $contact) {
                    return Link::make($contact->name)
                    ->route('platform.contact.edit', $contact->id);
                }),
                

            //  TD::make('demo', 'Last Name'),
            TD::make('email', 'Email'),
            TD::make('phone', 'Phone'),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),

            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(function (Contact $contact) {
                return DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('View'))
                            ->route('platform.contact.edit', $contact->id)
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