<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index() {
        $classes = Classes::all();
        return view('classes', compact('classes'));
    }

    public function create() {
        return view('tambah_class');
    }

    public function store() {
        Classes::create([
            'name'=>request()->name,
            'mentor'=>request()->mentor,
            'status'=>request()->status,
        ]);
        return redirect('/class');
    }
}
