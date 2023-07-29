<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\CountryListLayout;
use App\Models\Country;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CountryListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'countries' => Country::paginate(),
            'recentCountries' => Country::latest()->take(5)->get(),
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return 'Country List';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return 'All countries';
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create New Country')
                ->icon('pencil')
                ->route('platform.country.edit'),
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
            CountryListLayout::class,
        ];
    }
}