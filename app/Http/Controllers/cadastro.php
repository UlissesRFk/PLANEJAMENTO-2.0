<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pessoa;
class cadastro extends Controller
{
    public function index(){
        return view('cadastro');
    }
}
