<?php

namespace App\Orchid\Screens;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Select;
class CountryEditScreen extends Screen
{
    /**
     * @var Country
     */
    public $country;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @param Country $country
     * @return array
     */
    public function query(Country $country): array
    {
        $country->load('attachment');
        return [
            'country' => $country ?? new Country(),
        ];
    } 
  

    /**
     * The name displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->country->exists ? 'Edit Country' : 'Create a New Country';
    }

    /**
     * The description displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Country Information";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create Country')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->country->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->country->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->country->exists),
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
                Input::make('country.title')
                    ->title('Title')
                    ->required()
                    ->placeholder('Country Title')
                    ->help('Specify the title for this country.'),

                
                    Cropper::make('country.hero')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(600)
                    ->height(400),

                TextArea::make('country.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for the country.'),

                    Relation::make('country.author')
                    ->title('Author')
                    ->required()
                    ->fromModel(User::class, 'name'),

                Quill::make('country.body')
                    ->title('Main Text'),

                // Other fields related to the country information

            ])
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Country $country, Request $request)
    {
        
        $country->fill($request->get('country'))->save();

// Store the attachments
$attachments = $request->input('country.attachment');
        Alert::info('You have successfully created or updated the country.');
 
        return redirect()->route('platform.country.list');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Country $country)
    {
        $country->delete();

        Alert::info('You have successfully deleted the country.');

        return redirect()->route('platform.country.list');
    }
}