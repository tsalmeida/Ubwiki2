<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Your logic here
        return view('admin'); // This will return the admin.blade.php view
    }

}
