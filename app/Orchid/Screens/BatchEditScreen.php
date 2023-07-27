<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Batch;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateRange;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Matrix;
class BatchEditScreen extends Screen
{
    
    /**
     * @var batch
     */
    public $batch;

    /**
     * Query data.
     *
     * @param Batch $batch
     *
     * @return array
     */
    public function query(Batch $batch): array
    {
        $batch->load('attachment');
        return [
            'batch' => $batch ?? new Batch(),
        ];
    }
    

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->batch->exists ? 'Edit batch' : 'Creating a new batch';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Blog batchs";
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create batch')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->batch->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->batch->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->batch->exists),
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
                Input::make('batch.course_name')
                    ->title('Title')
                    ->required()
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this batch.'),

                    // Cropper::make('batch.hero')
                    // ->targetRelativeUrl()
                    // ->title('Large web banner image, generally in the front and center')
                    // ->width(600)
                    // ->height(450),  
    
                
                Select::make('batch.duration')
                ->options([
                    '1'  => '1 Week',
                    '2'  => '2 Weeks',
                    '3'  => '3 Weeks',
                    '4'  => '4 Weeks',
                    '5'  => '5 Weeks',
                    '6'  => '6 Weeks',
                    '7'  => '7 Weeks',
                    '8'  => '8 Weeks',
                    '9'  => '9 Weeks',
                    '10' => '10 Weeks',
                    '11' => '11 Weeks',
                    '12' => '12 Weeks',
                    '13' => '13 Weeks',
                    '14' => '14 Weeks',
                    '15' => '15 Weeks',
                    '16' => '16 Weeks',
                    '17' => '17 Weeks',
                    '18' => '18 Weeks',
                    '19' => '19 Weeks',
                    '20' => '20 Weeks',
                ]) 
                ->empty('No select')
                ->title('Duration')
                ->help('Select the duration of the batch in weeks'),
            

                    // TextArea::make('batch.launch_date')
                    // ->title('duration')
                    // ->placeholder('Di'),
                    
                    DateTimer::make('batch.launch_date')
                    ->title('Launch Date')
                    ->allowInput(),

                

                // Quill::make('batch.timings')
                //     ->title('Main text'),

                    Matrix::make('batch.timings')
                    ->title('Timings')
                    ->columns(['Timings'])
                    ->fields([
                        'Timings' => DateTimer::make()->title('Batch Timing')->noCalendar()
                        ->format('h:i K'),
                    ]),
                    
      

            ])
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(batch $batch, Request $request)
    {
        $batch->fill($request->get('batch'))->save();
    
     // Store the attachments
$attachments = $request->input('batch.attachment');
// $batch->attachments()->attach($attachments);


    
        Alert::info('You have successfully created or updated the batch.');
    
        return redirect()->route('platform.batch.list');
    }



    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Batch $batch)
    {
        $batch->delete();
        // $batch->$request->get('batch')->delete();

        Alert::info('You have successfully deleted the batch.');

        return redirect()->route('platform.batch.list');
    }
}
