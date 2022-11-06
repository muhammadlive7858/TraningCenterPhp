<?php

namespace App\Http\Controllers;

use App\Models\mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user();
        $mentors = mentor::where('user_id' , $user_id)->get();
        return view('mentors.index' , compact('mentors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show(mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(mentor $mentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mentor $mentor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(mentor $mentor)
    {
        //
    }
}
