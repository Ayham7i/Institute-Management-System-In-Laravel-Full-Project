<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
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
    public function edit(string $id)
    {
        //  $data= User::where('employee_id', $id)->firstOrFail();
        $data=User::findOrFail($id);;
        return view('Settings.edit',['data'=>$data]); 
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);
        $name = $request['name'];
        $email = $request['email'];
        $password = Hash::make($request['password']);
        $temporary_password = $request['password'];
    
        $users->update([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'temporary_password' => $temporary_password,
        ]);
    
        return redirect()->route('Settings.edit',$id=auth()->user()->id)->with('success', 'User updated successfully');
    }
    

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
