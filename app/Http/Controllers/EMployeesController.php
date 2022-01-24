<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EMployeesController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'description' => $request->get('description'),
            'salary' => $request->get('salary'),
        ];
        Employees::create($data);
        dd('done');
    }

    public function getData()
    {
        // dd('hello');
        $employees = Employees::all();
        return view('list', compact('employees'));
    }
}
