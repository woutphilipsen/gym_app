<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lead;

class LeadController extends Controller
{
    public function create() 
    {
        return Inertia::render('Leads/LeadAdd');
    }
    
    public function store(Request $request) 
    {
        $postData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'phone' => 'required',
        ]);

        $package = "";
        if ($request->has('package')) {
            $package = $request->input('package');
        }

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'dob' => $postData['dob'],
            'phone' => $postData['phone'],
            'branch_id' => 2,
            'age' => 32,
            'added_by' => 1,
            'interested_package' => $package,
        ]);

        return redirect()->route('dash');
    }
}
