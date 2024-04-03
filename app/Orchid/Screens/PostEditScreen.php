<?php

namespace App\Orchid\Screens;

use App\Models\Post;
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
class PostEditScreen extends Screen
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Query data.
     *
     * @param Post $post
     *
     * @return array
     */
    public function query(Post $post): array
    {
        $post->load('attachment');
        return [
            'post' => $post ?? new Post(),
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->post->exists ? 'Edit post' : 'Creating a new post';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Blog posts";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create post')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->post->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->post->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->post->exists),
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
                Input::make('post.title')
                    ->title('Title')
                    ->required()
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this post.'),

                    Select::make('post.type')
                    ->options([
                        'home'   => 'On Homepage Slider',
                        'blog' => 'On Blog Page',
                    ])
                    ->empty('No select')
                    ->title('Select Area to display')
                    ->help('Where You want to display this Image'),

                        Cropper::make('post.hero')
                        ->targetRelativeUrl()
                        ->title('Large web banner image, generally in the front and center')
                        ->width(600)
                        ->height(400),

                TextArea::make('post.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for preview'),

                    Input::make('post.keyword')
                    ->title('Keyword')
                   ,

                   Input::make('post.metatitle')
                   ->title('Metatitle')
                  ,

                  Input::make('post.metadescription')
                  ->title('Metadescription')
                 ,

                Relation::make('post.author')
                    ->title('Author')
                    ->required()
                    ->fromModel(User::class, 'name'),

                Quill::make('post.body')
                    ->title('Main text'),

                    // Upload::make('post.attachment')
                    //     ->title('Attachment')
                    //     ->maxFiles(1)
                    //     ->acceptedFiles('image/*'),


            ])

        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Post $post, Request $request)
    {
        $post->fill($request->get('post'))->save();

     // Store the attachments
$attachments = $request->input('post.attachment');
// $post->attachments()->attach($attachments);



        Alert::info('You have successfully created or updated the post.');

        return redirect()->route('platform.post.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Post $post)
    {
        $post->delete();
        // $post->$request->get('post')->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.post.list');
    }
}
