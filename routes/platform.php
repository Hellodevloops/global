<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;
use App\Orchid\Screens\ContactScreen;
use App\Orchid\Screens\ContactListScreen;
use App\Orchid\Screens\ContactEditScreen;
use App\Orchid\Screens\PostEditScreen;
use App\Orchid\Screens\PostListScreen;
use App\Orchid\Screens\CourseEditScreen;
use App\Orchid\Screens\CourseListScreen;
use App\Orchid\Screens\BatchEditScreen;
use App\Orchid\Screens\BatchListScreen;
use App\Orchid\Screens\CountryEditScreen;
use App\Orchid\Screens\CountryListScreen;
use App\Orchid\Screens\ServiceEditScreen; // Import the ServiceEditScreen
use App\Orchid\Screens\ServiceListScreen; // Import the ServiceListScreen
use App\Orchid\Screens\BannerEditScreen;
use App\Orchid\Screens\BannerListScreen;
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example screen'));

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

//Route::screen('idea', Idea::class, 'platform.screens.idea');
// Route::screen('contact', ContactScreen::class)->name('platform.ContactScreen');
//contact    
Route::screen('contact/{contact?}', ContactEditScreen::class)
    ->name('platform.contact.edit');

Route::screen('contacts', ContactListScreen::class)
    ->name('platform.contact.list');

    
    Route::screen('post/{post?}', PostEditScreen::class)
    ->name('platform.post.edit');

Route::screen('posts', PostListScreen::class)
    ->name('platform.post.list');

    Route::screen('course/{post?}', CourseEditScreen::class)
    ->name('platform.course.edit');

Route::screen('courses', CourseListScreen::class)
    ->name('platform.course.list');

    Route::screen('batch/{post?}', BatchEditScreen::class)
    ->name('platform.batch.edit');

Route::screen('batchs', BatchListScreen::class)
    ->name('platform.batch.list');

    Route::screen('country/{country?}', CountryEditScreen::class)
    ->name('platform.country.edit');

Route::screen('countries', CountryListScreen::class)
    ->name('platform.country.list');

    Route::screen('service/{service?}', ServiceEditScreen::class) // Update to use ServiceEditScreen
    ->name('platform.service.edit'); // Update the route name

Route::screen('services', ServiceListScreen::class) // Update to use ServiceListScreen
    ->name('platform.service.list'); // Update the route name

    Route::screen('banner/{post?}', BannerEditScreen::class)
    ->name('platform.banner.edit');

Route::screen('banners', BannerListScreen::class)
    ->name('platform.banner.list');