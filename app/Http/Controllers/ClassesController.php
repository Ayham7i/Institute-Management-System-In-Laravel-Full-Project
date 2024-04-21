<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Employees;
use App\Models\Students;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Class=Classes::with('Employee')->get();
        $Employee=Employees::with('Class')->get();
       
        return view('Classes.index',compact('Employee','Class'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Employees::all();
       
        return view('Classes.create',['data'=>$data]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData=$request->all();
        $user_id=auth()->user()->id;
        $requestData["user_id"] = $user_id;
        
        Classes::create($requestData);
        return redirect()->route('Classes.index')->with('success','Classes added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student=Students::findOrFail($id);
        $data=Classes::all();

        
        return view('Student.index',compact('student'),['data'=>$data]);

    }

    public function showedit()  {

        return view('Classes.showedit');
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
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
