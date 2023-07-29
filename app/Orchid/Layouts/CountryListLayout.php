<?php

namespace App\Orchid\Layouts;

use App\Models\Country;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;

class CountryListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'countries'; // Set the target to 'countries' to fetch data from the 'countries' table.

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('title', __('Title'))
            ->sort()
            ->filter(Input::make())
            ->render(function (Country $country) {
                return Link::make($country->title)
                    ->route('platform.country.edit', $country);
            }),

            TD::make('created_at', __('Created'))
                ->sort() // Allow sorting on this column
                ->render(function (Country $country) {
                    return $country->created_at->toDateTimeString();
                }),

            TD::make('updated_at', __('Last Updated'))
                ->sort() // Allow sorting on this column
                ->render(function (Country $country) {
                    return $country->updated_at->toDateTimeString();
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Country $country) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            // You can add more actions here if needed

                            Link::make(__('View'))
                                ->route('platform.country.edit', ['country' => $country])
                                ->icon('eye'),
                        ]);
                }),
        ];
    }
}