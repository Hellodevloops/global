<?php

namespace App\Orchid\Layouts;

use App\Models\Service; // Import the Service model
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class ServiceListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'services'; // Update to use 'services' as the data source

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Service $service) {
                    return Link::make($service->title)
                        ->route('platform.service.edit', $service); // Update the route to the service edit screen
                }),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
