<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Lead;
use Carbon\Carbon;

class LeadController extends Controller
{   
    private $validations;

    public function __construct()
    {
        $this->validations = [
            'name' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'phone' => 'required',
            'interested_package' => 'sometimes',
        ];
    }

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
        $postData = $this->validate($request, $this->validations);

        $package = "";
        if ($request->has('interested_package')) {
            $package = $request->input('interested_package');
        }

        $dob = Carbon::parse($postData['dob']);
        $age = $dob->age;

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'dob' => $dob,
            'phone' => $postData['phone'],
            'branch_id' => 1,
            'age' => $age,
            'added_by' => Auth::user()->id,
            'interested_package' => $package,
        ]);

        return redirect()->route('lead.list');
    }

    public function view(Lead $lead)
    {
        $lead->load(['reminders']);
        
        return Inertia::render('Leads/LeadView.vue', [
            'lead-prop' => $lead
        ]);
    }

    public function update(Request $request)
    {
        $rules = $this->validations;
        $rules['id'] = 'required|exists:leads';

        $postData = $this->validate($request, $rules);
        $postData['age'] = Carbon::parse($postData['dob'])->age;

        $lead = Lead::where('id', $postData['id'])
            ->update($postData);

        return redirect()
            ->route('lead.view', ['lead' => $postData['id']]);
    }
}
