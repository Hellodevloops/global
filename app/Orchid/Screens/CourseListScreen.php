<?php
namespace App\Orchid\Screens;

use App\Orchid\Layouts\CourseListLayout;
use App\Models\Course;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CourseListScreen extends Screen
{
      /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'courses' => Course::filters()->defaultSort('id')->paginate(),
            'recentcourses' => Course::latest()->take(5)->get(),
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Blog course';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All blog courses";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.course.edit')
        ];
    }

     /**
     * Views.
     *
     * @return array
     */
    public function layout(): array
    {
        return [
            CourseListLayout::class,
        ];
    }
}