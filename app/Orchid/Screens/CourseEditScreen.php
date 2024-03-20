<?php

namespace App\Orchid\Screens;

use App\Models\Course;
// use App\Models\Post;
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

class CourseEditScreen extends Screen
{
    /**
     * @var Course
     */
    public $course;

    /**
     * Query data.
     *
     * @param course $course
     *
     * @return array
     */
    public function query(Course $course): array
    {
        $course->load('attachment');
        return [
            'course' => $course ?? new Course(),
        ];
    }


    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->course->exists ? 'Edit course' : 'Creating a new course';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Blog courses";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create course')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->course->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->course->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->course->exists),
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
                Input::make('course.title')
                    ->title('Title')
                    ->required()
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this course.'),

                    Cropper::make('course.hero')
                    ->targetRelativeUrl()
                    ->title('Large web banner image, generally in the front and center')
                    ->width(600)
                    ->height(450),

                TextArea::make('course.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for preview'),

                    Input::make('course.keyword')
                    ->title('Keyword')
                   ,

                   Input::make('course.metatitle')
                   ->title('Metatitle')
                  ,

                  Input::make('course.metadescription')
                  ->title('Metadescription')
                 ,

                Relation::make('course.author')
                    ->title('Author')
                    ->required()
                    ->fromModel(User::class, 'name'),

                Quill::make('course.body')
                    ->title('Main text'),

                    // Upload::make('course.attachment')
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
    public function createOrUpdate(Course $course, Request $request)
    {
        $course->fill($request->get('course'))->save();

     // Store the attachments
$attachments = $request->input('course.attachment');
// $course->attachments()->attach($attachments);



        Alert::info('You have successfully created or updated the course.');

        return redirect()->route('platform.course.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Course $course)
    {
        $course->delete();
        // $course->$request->get('course')->delete();

        Alert::info('You have successfully deleted the course.');

        return redirect()->route('platform.course.list');
    }
}
