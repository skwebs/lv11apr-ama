<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentParentRequest;
use App\Models\StudentParent;
use Illuminate\Http\Request;

class StudentParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request);
        return view('v1.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentParentRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentParent $studentParent)
    {
        return $studentParent->id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentParent $studentParent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentParent $studentParent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentParent $studentParent)
    {
        //
    }
}
