<?php

namespace App\Http\Controllers;

use App\Models\Jobseeker;
use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobseekers  = Jobseeker::all();
        return view('viewpostedemployer', compact('jobseekers'));
    }

    public function seek()
    {
     return view('seek');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdash');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'age' => 'required',
            'address' => 'required',
            'qualification' => 'required',
            'gender' => 'required'
        ]);


        $Jobseeker = Jobseeker::create($data);
        //  return view('userdash');
        return redirect(url('dashboard')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function show(Jobseeker $jobseeker)
    {
        return view('viewposted', compact('jobseeker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobseeker $jobseeker)
    {
        
        $jobseeker->delete();
        // return redirect(url('index-product'));
    
    }
}
