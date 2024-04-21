<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject=Subjects::with('class')->get();
        // $classes=Classes::with('Subejct')->get();
        // dd($students);
        return view('Subject.index',compact('subject'));
       
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data =Classes::all();
        return view('Subject.create',['data'=>$data]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData=$request->all();
        $user_id=auth()->user()->id;
        $requestData["user_id"] = $user_id;
        Subjects::create($requestData);
        
        
        return redirect()->route('Subject.index')->with('success','Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject=Subjects::findOrFail($id);
        $data=Classes::all();

        
        return view('Subject.edit',compact('subject'),['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject=Subjects::findOrFail($id);

       

        ####

        
        $requestData = $request->all();
       
        
        $subject->update($requestData);
       
        ####

        return redirect()->route('Subject.index')->with('success','Subject Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject=Subjects::findOrFail($id);

        $subject->delete();

        return redirect()->route('Subject.index')->with('success','subject Deleted successfully');
    }
}
