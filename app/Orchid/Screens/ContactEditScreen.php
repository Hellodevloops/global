<?php

namespace App\Orchid\Screens;

use App\Models\Contact;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Cropper;

use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ContactEditScreen extends Screen
{
    /**
     * @var Contact
     */
    public $contact;

    /**
     * Query data.
     *
     * @param Contact $Contact
     *
     * @return array
     */
    public function query(Contact $contact): array
    {
        // $contact->load('attachment');
        
        return [
            'contact' => $contact
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->contact->exists ? 'View contact' : 'Creating a new contact';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Start Entering Contact";
    }
    // public function permission(): ?iterable
    // {
    //     return [
    //         'platform.contact.edit',
            
    //     ];
    // }
    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Update Contact')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee(!$this->contact->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->contact->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->contact->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('contact.name')
                    ->title(' Name')
                    ->type('text')
                    ->required()
                    ->placeholder('Enter First Name '),

                    // Input::make('contact.demo')
                    // ->title('Last Name')
                    // ->required()
                    // ->placeholder('Enter Last Name'),


                    Input::make('contact.phone')
                    ->title('Phone')
                    ->type('number')
                    ->required()
                    ->placeholder('Enter Phone Number '),

                    Input::make('contact.email')
                    ->title('Email')
                    ->type('email')
                    ->required()
                    ->placeholder('Enter Email '),

                    TextArea::make('contact.subject')
                    ->title('Subject')
                    ->required()
                    ->rows(1)
                    ->maxlength(6)
                    ->placeholder('Brief title for Enquiry'),
            
                    TextArea::make('contact.message')
                    ->title('Message')
                    ->required()
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for Enquiry'),
              
    
              
    
            ])
        ];
    }

    /**
     * @param Contact    $contact
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Contact $contact, Request $request)
    {
        $contact->fill($request->get('contact'))->save();

        

        Alert::info('You have successfully Updated a Contact.');

        return redirect()->route('platform.contact.list');
    }

    /**
     * @param Post $contact
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Contact $contact)
    {
        $contact->delete();

        Alert::info('You have successfully deleted the Contact.');

        return redirect()->route('platform.contact.list');
    }
}