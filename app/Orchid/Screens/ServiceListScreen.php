<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\ServiceListLayout;
use App\Models\Service;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ServiceListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'services' => Service::paginate() // Update to use the Service model
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Services'; // Change the screen name
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "All services"; // Update the description
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
                ->route('platform.service.edit') // Change the route to the service edit screen
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
            ServiceListLayout::class // Update to use the ServiceListLayout
        ];
    }
}
