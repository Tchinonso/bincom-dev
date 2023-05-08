<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polling_unit;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $polls = Polling_unit::all();
        return view('results.index') -> with ('polls', $polls);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('results.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'uniqueid' => 'required',
            'polling_unit_id' => 'required',
            'ward_id' => 'required',
            'lga_id' => 'required',
            'uniquewardid' => 'required',
            'polling_unit_number' => 'required',
            'polling_unit_name' => 'required',
            'polling_unit_description' => 'required',
            'lat' => 'required',
            'long' => 'required',
            // 'updated_timestamp' => 'required',
            // 'created_timestamp' => 'required',
        ]);
        
        $polls = new Polling_unit;

        $polls->uniqueid = $request->input('uniqueid');
        $polls->polling_unit_id = $request->input('polling_unit_id');
        $polls->ward_id = $request->input('ward_id');
        $polls->lga_id = $request->input('lga_id');
        $polls->uniquewardid = $request->input('uniquewardid');
        $polls->polling_unit_number = $request->input('polling_unit_number');
        $polls->polling_unit_name = $request->input('polling_unit_name');
        $polls->polling_unit_description = $request->input('polling_unit_description');
        $polls->lat = $request->input('lat');
        $polls->long = $request->input('long');
        // $polls->entered_by_user = $request -> input('entered_by_user');
        // $polls->date_entered = $request -> input('date_entered');
        // $polls->user_ip_address = $request -> input('user_ip_address');
      

        $polls->save();

        return redirect('http://localhost:8080/bincom-dev/public/results/')->with('success', 'Result Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $poll = Polling_unit::find($id);
        return view('results.show')->with('poll', $poll);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
