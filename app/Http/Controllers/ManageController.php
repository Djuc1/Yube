<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Hash;


class ManageController extends Controller
{
    // show registration form
    public function manageLists()
    {
        $data['title'] = "manage Listings";

        //return view('listings.manageLists', $data);
        return view('listings/manageLists', ['listings' => auth()->user()->listings()->get()]);

    }

   
}
