<?php

namespace App\Orchid\Screens;

use App\Models\Banner;
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

class BannerEditScreen extends Screen
{
    /**
     * @var banner
     */
    public $banner;

    /**
     * Query data.
     *
     * @param banner $banner
     *
     * @return array
     */
    public function query(Banner $banner): array
    {
        $banner->load('attachment');
        return [
            'banner' => $banner ?? new Banner(),
        ];
    }
    

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->banner->exists ? 'Edit banner' : 'Creating a new banner';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Blog banners";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create banner')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->banner->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->banner->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->banner->exists),
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
                Input::make('banner.title')
                    ->title('Title')
                    ->required()
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this banner.'),

                

                    Cropper::make('banner.hero')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ,  
    
      

            ])
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Banner $banner, Request $request)
    {
        $banner->fill($request->get('banner'))->save();
    
     // Store the attachments
$attachments = $request->input('banner.attachment');
// $banner->attachments()->attach($attachments);


    
        Alert::info('You have successfully created or updated the banner.');
    
        return redirect()->route('platform.banner.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Banner $banner)
    {
        $banner->delete();
        // $banner->$request->get('banner')->delete();

        Alert::info('You have successfully deleted the banner.');

        return redirect()->route('platform.banner.list');
    }
}