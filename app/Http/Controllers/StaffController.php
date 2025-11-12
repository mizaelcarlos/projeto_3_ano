<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    public function index()
    {
        return view('staff.index');
    }


    public function create()
    {
        return view('staff.create');
    }

   
        public function store(Request $request){
    
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff',
            'position' => 'required|string|max:255',
        ]);


        return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
    }

    
    public function show(string $id)
    {
        
        return view('staff.show'); 
    }

    
    public function edit(string $id)
    {
        
        return view('staff.edit'); 
    }

    public function update(Request $request, string $id)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email,' . $id,
            'position' => 'required|string|max:255',
        ]);

        
        return redirect()->route('staff.index')->with('success', 'Staff member updated successfully.');
    }

    
    public function destroy(string $id)
    {
       
        return redirect()->route('staff.index')->with('success', 'Staff member deleted successfully.');
    }
}
