<?php

declare(strict_types=1);

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make('Enquiry ')
                ->icon('call-in')
                ->route('platform.contact.list')
                // ->route('platform.ContactScreen')
                ->title('Contact'),
                // ->badge(fn () => 6),
            Menu::make('Post')
                ->icon('browser')
                ->route('platform.post.list')
                // ->route('platform.ContactScreen')
                ->title('Manage'),
                // ->badge(fn () => 6),
            Menu::make('Courses')
                ->icon('book-open')
                ->route('platform.course.list'),
                // ->badge(fn () => 6),
            Menu::make('Batches')
                ->icon('friends')
                ->route('platform.batch.list'),
                // ->badge(fn () => 6),

           // Add a new menu item for managing countries
           Menu::make('Countries')
           ->icon('globe')
           ->route('platform.country.list') // Assuming you have the 'CountryListScreen' registered with this route
           ->title('Manage Countries'),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make(__('Profile'))
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
