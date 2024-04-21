<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $employee=Employees::with('Class')->get();       
        return view('Employee.index',compact('employee'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Employees::all();
        return view('Employee.create',['data'=>$data]);
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
        
        $employee = Employees::create($requestData);

// Generate email and password for user
      $email = $employee->id . '@IMS.com'; // Use the employee ID to create a unique email
      $password = Str::random(8); // Generate a random password

// Store the employee ID, email, and password in the user table
User::create([
    'employee_id' => $employee->id,
    'email' => $email,
    'password' => $password,
    'temporary_password' => $password,
    'name' => $employee->name,
    'role_id' => "2",

]);

        
        
        
        return redirect()->route('Employee.index')->with('success','Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee=Employees::findOrFail($id);
        $user = User::where('employee_id', $id)->firstOrFail();

        
        return view('Employee.show',compact('employee','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $employee=Employees::findOrFail($id);
     
        return view('Employee.edit',compact('employee'));
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

        $employee=Employees::findOrFail($id);

       

        ####

        
        $requestData = $request->all();
        if (isset($requestData["Image"])) {

        $fileName = time().$request->file('Image')->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images',$fileName,'public');
        $requestData["Image"] = '/storage/'.$path;
        }
        
        


        $employee->update($requestData);
       
        ####

        return redirect()->route('Employee.index')->with('success','Employee Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee=Employees::findOrFail($id);

        $employee->delete();

        return redirect()->route('Employee.index')->with('success','Employee Deleted successfully');
    }
}
