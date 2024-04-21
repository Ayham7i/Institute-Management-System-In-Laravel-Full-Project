<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Students::with('class','user')->get();
        $classes=Classes::with('Student')->get();
        // dd($students);
        return view('Student.index',compact('students','classes',));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $data=Classes::all();
        // dd($students);
        return view('Student.create',['data'=>$data]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$/'],

            'Phone' => ['required', 'numeric'],
        
            'Image' => ['required', 'image'],
        ]);
        

        $requestData = $request->all();
        $fileName = time().$request->file('Image')->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images',$fileName,'public');
        $requestData["Image"] = '/storage/'.$path;
        $user_id=auth()->user()->id;
        $requestData["user_id"] = $user_id;
        
        

        // Students::create($request->all());
        Students::create($requestData);
        
        return redirect()->route('Student.index')->with('success','Student added successfully');
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
        $student=Students::findOrFail($id);
        $data=Classes::all();

        
        return view('Student.edit',compact('student'),['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$/'],

            'Phone' => ['required', 'numeric'],
        
            'Image' => ['required', 'image'],
        ]);
        $student=Students::findOrFail($id);

       

        ####

        
        $requestData = $request->all();
        if (isset($requestData["Image"])) {
            
        $fileName = time().$request->file('Image')->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images',$fileName,'public');
        $requestData["Image"] = '/storage/'.$path;
        
        }
  
        

        // Students::create($request->all());

        $student->update($requestData);
       
        ####

        return redirect()->route('Student.index')->with('success','Student Updated successfully');


        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student=Students::findOrFail($id);

        $student->delete();

        return redirect()->route('Student.index')->with('success','Student Deleted successfully');



    }
}
