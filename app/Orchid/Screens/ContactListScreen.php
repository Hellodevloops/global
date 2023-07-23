<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\ContactListLayout;
use Illuminate\Http\Request;
use App\Models\Contact;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ContactListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'contact' => Contact::paginate()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Enquiry List';
    }
     /**
      * The description is displayed on the user's screen under the heading
      */
      public function description(): ?string
      {
          return "All Form Enquirys";
      }

    //   public function permission(): ?iterable
    // {
    //     return [
    //         'platform.contact.list',
            
    //     ];
    // }
    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new')
            ->icon('pencil')
            ->route('platform.contact.edit')
            
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
     {
         return [
            ContactListLayout::class
         ];
     }

     public function remove(Request $request): void
     {
         Contact::findOrFail($request->get('id'))->delete();
 
        //  Toast::info(__('User was removed'));
     }
}