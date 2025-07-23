<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('/loginTKD');
    }

    public function pagos()
    {
        return view('/pagos/main');
    }

    public function pedidos()
    {
        return view('/pedidos/main');
    }
}
