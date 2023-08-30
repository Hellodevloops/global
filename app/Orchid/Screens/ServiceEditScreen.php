<?php

namespace App\Orchid\Screens;

use App\Models\Service; // Import the Service model
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
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;

class ServiceEditScreen extends Screen
{
    /**
     * @var Service
     */
    public $service;

    /**
     * Query data.
     *
     * @param Service $service
     *
     * @return array
     */
    public function query(Service $service): array
    {
        $service->load('attachment');
        return [
          
            'service' => $service

        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->service->exists ? 'Edit service' : 'Creating a new service';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Service details";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create service')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->service->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->service->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->service->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    private function getIconClasses(): array
    {
        $cssFilePath = public_path('css/flaticon.css');
        $cssContent = file_get_contents($cssFilePath);
        $iconClasses = [];

        $pattern = '/\.flaticon-[a-zA-Z0-9-]+/';

        if (preg_match_all($pattern, $cssContent, $matches)) {
            foreach ($matches[0] as $match) {
                $iconClassName = str_replace('.', '', $match);
                $iconClasses[$match] = ucwords(str_replace('-', ' ', $iconClassName));
            }
        }

        return $iconClasses;
    }

    public function layout(): array
    {
        
       $iconClasses = $this->getIconClasses();

        return [
            Layout::rows([
                Input::make('service.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this service.'),

                    Cropper::make('service.hero')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(1000)
                    ->height(500),

                    Select::make('service.icon_class')
                    ->title('Select Icon')
                    ->options($iconClasses)
                    ->help('Select an icon class from the dropdown.'),

                
                TextArea::make('service.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for preview'),

                Relation::make('service.author')
                    ->title('Author')
                    ->fromModel(User::class, 'name'),

                Quill::make('service.body')
                    ->title('Main text'),

            ])
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
   /**
 * @param Service $service
 * @param \Illuminate\Http\Request $request
 *
 * @return \Illuminate\Http\RedirectResponse
 */
public function createOrUpdate(Service $service, Request $request)
{
    $serviceData = $request->get('service');
    
    // Remove the dot prefix from the icon class name
    $serviceData['icon_class'] = ltrim($serviceData['icon_class'], '.');

    $service->fill($serviceData)->save();

   
    // Store the attachments (adjust this part based on your requirements)
    $attachments = $request->input('service.attachment');
    // Attachments logic goes here
         // Store the attachments
$attachments = $request->input('service.attachment');
    // $service->attachments()->attach($attachments);
    // $this->service->attachment()->syncWithoutDetaching(
    //     $request->input('service.attachment', [])
    // );

    Alert::info('You have successfully created or updated the service.');

    return redirect()->route('platform.service.list');
}

  /**
 * Remove the specified resource from storage.
 *
 * @param Service $service
 * @return \Illuminate\Http\RedirectResponse
 */
public function remove(Service $service)
{
    $service->delete();

    Alert::info('You have successfully deleted the service.');

    return redirect()->route('platform.service.list'); // Update the route name
}

}
