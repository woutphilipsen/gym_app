<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lead;

class LeadController extends Controller
{    
    public function index()
    {
        $leads = Lead::query()
            ->where('branch_id', 1)
            ->orderByDesc('id')
            ->get();

            return Inertia::render('Leads/Index', [
                'leads' => $leads
            ]);
    }

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
        if ($request->has('interested_package')) {
            $package = $request->input('interested_package');
        }

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'dob' => $postData['dob'],
            'phone' => $postData['phone'],
            'branch_id' => 1,
            'age' => 32,
            'added_by' => 1,
            'interested_package' => $package,
        ]);

        return redirect()->route('lead.list');
    }

    public function view(Lead $lead)
    {
        return Inertia::render('Leads/LeadView.vue', [
            'lead-prop' => $lead
        ]);
    }
}
