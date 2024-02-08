<?php

namespace App\Http\Controllers;

use App\Models\Service; // Import the Service model
use App\Models\Post; // Import the Service model
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(12); // Order services by creation date in descending order

        // Pass the services to the view for listing
        return view('service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Logic to show the create form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Logic to store a new service
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function show(Service $service)
    // {
    //     $services = Service::latest()->paginate(6); // Order services by creation date in descending order
    //     // Retrieve the next and previous services
    //     $previous = Service::where('id', '<', $service->id)->orderBy('id', 'desc')->first();
    //     $next = Service::where('id', '>', $service->id)->orderBy('id')->first();
    //     $recentservices = Service::orderBy('id', 'desc')->take(5)->get();
    //     $recentposts = Post::orderBy('id', 'desc')->take(5)->get();
    //     // Pass the current service, previous service, and next service to the view
    //     return view('service.service_detail', compact('service','services','previous', 'next','recentservices','recentposts'));
    // }


    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();

        // Check if the post is not found and handle accordingly
        if (!$service) {
            abort(404); // or any other error handling mechanism you prefer
        }

        // Retrieve the next and previous posts
        $previous = Service::where('id', '<', $service->id)->orderBy('id', 'desc')->first();
        $next = Service::where('id', '>', $service->id)->orderBy('id')->first();
        $recentposts = Service::orderBy('id', 'desc')->take(3)->get();
        $recentservices = Service::orderBy('id', 'desc')->take(5)->get();
        // Pass the current service, previous service, and next service to the view
        return view('service.service_detail', compact('service', 'previous', 'next','recentposts','recentservices'));
    }

    // ... (Remaining methods for edit, update, and destroy, if needed)
}
