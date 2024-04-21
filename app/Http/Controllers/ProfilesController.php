<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Employees;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
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
        //
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
    public function edit(string $id )
    {
       

        $data=Employees::findOrFail($id);

        return view('Profiles.edit',['data'=>$data]);

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'name' => ['required', 'regex:/^[A-Za-z\s]+$/'],
        'Email' => ['required', 'email'],
        'Phone' => ['required', 'numeric'],
        'DOB' => ['nullable', 'date'],
        'Address' => ['required', 'string'],
        'Education' => ['nullable', 'string'],
        'photo' => ['required', 'image'],
        ]);
    
        $employee=Employees::findOrFail($id);

       

          $requestData = $request->all();
          if (isset($requestData["Image"])) {
            $fileName = time().$request->file('Image')->getClientOriginalName();
            $path = $request->file('Image')->storeAs('images',$fileName,'public');
            $requestData["Image"] = '/storage/'.$path;
            }

           $employee->update($requestData);

        return redirect()->route('Profiles.edit',$id=auth()->user()->employee_id)->with('success','Your Profile Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
