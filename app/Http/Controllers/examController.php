<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\exams;
use App\Models\Students;
use Illuminate\Http\Request;

class examController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $exams=  exams::all();

       $class=  Classes::all();

        return view("exam.index",compact('exams','class'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view("exam.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData=$request->all();
       
        
        exams::create($requestData);
        return redirect()->route('exam.index')->with('success','Exam added successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(exams $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $exam_id = $request->input('exam_id');

       $id = $exam_id;

        $data=exams::findOrFail($id);

        return view('exam.edit',['data'=>$data]);




    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id )
    {
        $exam=exams::findOrFail($id);

       

        ####

        
        $requestData = $request->all();
       
        
        $exam->update($requestData);
       
        ####

        return redirect()->route('exam.index')->with('success','exam Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     
 
         $data=exams::findOrFail($id);
         $data->delete();

         return redirect()->route('exam.index')->with('success','exam Deleted successfully');
 
    }

    public function showedit()
    {
        $exam = exams::all();
        return view('exam.showedit',compact('exam'));

    }

    public function studentdata(Request $request)
    {

    

        

    }



}
