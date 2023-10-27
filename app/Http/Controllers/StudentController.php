<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $stwgs = Student::all();
        return view('results', compact('stwgs'));
    }
    public function addweight(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'weight' => 'required',
        ]);
        $student = new Student;
        $student->name = $request->name;
        $student->weight = $request->weight;
        
        $student->save();

        return redirect('/results'); 
    }
}
