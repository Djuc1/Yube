<?php

namespace App\Http\Controllers;

use App\Models\listing;
use Illuminate\Http\Request;
use App\Http\Requests\StorelistingRequest;
use App\Http\Requests\UpdatelistingRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request\validated;
use Hash;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listings.index', [
            'listings'=> listing::latest()->filter(request(['tag','search']))->paginate(3)
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([

            'title'=> 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email', Rule::unique('listings', 'email')],
            'tags' => 'required',
            'description' => 'required'

         ]);
            
        $listing = new Listing();
        $listing->title = $request->title;
        $listing->company = $request->company;
        $listing->location = $request->location;
        $listing->email = $request->email;
        $listing->website = $request->website;
        $listing->tags = $request->tags;
        $listing->description = $request->description;


        if ($request->hasFile('logo')) {
            $listing->logo = $request->file('logo')->store('logos', 'public');
        }

        $listing['user_id'] = auth()->id();

        $listing->save();

        //Listing::create($storeLists->validated());
        return redirect('/')->with('message', 'listing created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(listing $listing)
    {
         return view('listings.show', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(listing $listing)
    {
        return view('listings.edit', [
            'listing'=> $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, listing $listing)
    {
        $storeLists = $request->validate([

            'title'=> 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'email' => ['required','email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
          
        ]);
        // $listingToUpdate = Listing::find($request->listing);
        // $listing->title = $request->title;
        // $listing->company = $request->company;
        // $listing->location = $request->location;
        // $listing->email = $request->email;
        // $listing->website = $request->website;
        // $listing->tags = $request->tags;
        // $listing->description = $request->description;

        if ($request->hasFile('logo')) {
            $storeLists['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $listing->update($storeLists);
        return redirect('/')-> with('message', 'listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(listing $listing)
    {
        $listing->delete();
        return redirect('/')-> with('message', 'listing deleted successfully');
    }
}
