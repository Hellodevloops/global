<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::latest()->take(7)->get(); // Order posts by creation date in descending order
        $banners = Banner::latest()->take(7)->get(); // Order posts by creation date in descending order
        $services = Service::latest()->take(6)->get(); // Order services by creation date in descending order
        // Pass the posts to the view for listing
        return view('home', ['posts' => $posts,'banners' => $banners,'services' => $services]);
    }
}
