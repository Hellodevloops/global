<?php
namespace App\Http\Controllers;
use Orchid\Screen\Screen;
use App\Models\Country; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Orchid\Support\Facades\Alert;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$countries = Country::all();
        $countries = Country::latest()->paginate(6); // Order countries by creation date in descending order

        // Pass the countries to the view for listing
        return view('country.index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        
    }

   /**
 * Display the specified resource.
 *
 * @param  \App\Models\Country  $country
 * @return \Illuminate\Http\Response
 */
public function show(Country $country)
{
    // Retrieve the next and previous countries (if applicable)
    // Assuming the Country model has an auto-incrementing ID column named 'id'
    $previous = Country::where('id', '<', $country->id)->orderBy('id', 'desc')->first();
    $next = Country::where('id', '>', $country->id)->orderBy('id')->first();
    
    // Pass the current country, previous country, and next country to the view
    return view('country.country_detail', compact('country', 'previous', 'next'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
 * @param \Illuminate\Http\Request $request
 *
 * @return \Illuminate\Http\RedirectResponse
 */
public function createOrUpdate(Country $country, Request $request)
{
    // Retrieve the current authenticated user (assuming you are using authentication)
    $user = auth()->user();

    // Fill the attributes of the Country model
    $country->fill($request->only([
        'title',
        'hero',
        'description',
        'type',
        'body',
       'author',
    ]));

    // Associate the current user as the author of the country
    $country->author = $user->id;

    // Save the country model
    $country->save();

    // Attach the attachments (if applicable)
    // $attachments = $request->input('country.attachment');
    // ...

    Alert::info('You have successfully created or updated the country.');

    return redirect()->route('platform.country.list');
}

}
