<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;


class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        // Code to validate input data
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'gender' => 'required',


        ]);

        // Code to create a new student record
        $data = new student();
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->save();


        return redirect()->back()->with('success', 'Data inserted successfully!');
    }

    public function show()
    {
        $data=Student::all();
        return view('show',[
            'data'=>$data
        ]);
    }
}
