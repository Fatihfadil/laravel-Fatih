<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Attributes;

class Usercontroller extends Controller
{
    //
    public function Tugas1()
    {
        return view('Tugas1');
    }

    public function Tugas2()
    {
        return view('Tugas2');
    }

   public function master()
    {
        return view('Template\master');
    }

   public function index()
    {
        return view('index');
    }
} 
