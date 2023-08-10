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
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('service.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this service.'),

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
    $service->fill($request->get('service'))->save();

    // Store the attachments (adjust this part based on your requirements)
    $attachments = $request->input('service.attachment');
    // Attachments logic goes here
    // $service->attachments()->attach($attachments);

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
