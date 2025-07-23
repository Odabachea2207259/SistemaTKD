<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function main()
    {
        return view('/alumnos/main');
    }

    public function add()
    {
        return view('/alumnos/add');
    }
}
