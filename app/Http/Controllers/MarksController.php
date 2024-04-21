<?php

namespace App\Http\Controllers;

use App\Models\exams;
use App\Models\marks;
use App\Models\Students;
use Illuminate\Http\Request;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks=marks::all();       
        return view('exam.examresult',compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

  /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $requestData = $request->all();

    $marksData = [];
    foreach ($requestData['studentid'] as $index => $studentId) {
        $marksData[] = [
            'student_id' => $studentId,
            'exam_name' => $requestData['examname'][$index],
            'marks' => $requestData['marks'][$index],
        ];
    }

    marks::insert($marksData);

    return redirect()->route('exam.examresult')->with('success', 'Marks added successfully');
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
    public function edit(Request $request)
    {
        $examId = $request->input('exam_id');
        $classId = $request->input('class_id');


        $exams=exams::findOrFail($examId);


       

        // $students = Students::where('class_id', $classId)->firstOrFail();
        $students = Students::where('class_id', $classId)->get();

        return view('exam.studentdata',compact('students','exams'));
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
