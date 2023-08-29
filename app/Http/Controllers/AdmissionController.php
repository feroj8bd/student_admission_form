<?php

namespace App\Http\Controllers;

use App\Models\Admisson;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function create()
    {
        return view('studentCreate');
    }



    /**
     * Admisson student store
     */
    public function store(Request $request)
    {
        // validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'father_name' => 'nullable|string|max:100',
            'mother_name' => 'nullable|string|max:100',
            'date_of_birth' => 'required|date',
            'phone_number' => 'nullable|numeric',
            'email' => 'required|email',
            'nationality' => 'nullable|string',
            'subject' => 'required|string',
            'gender' => 'required|string',
        ]);
        // return $validatedData;
        Admisson::create($validatedData);

        return 'data successfully save';
    }

   
}
