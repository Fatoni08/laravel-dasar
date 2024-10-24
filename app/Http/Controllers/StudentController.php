<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($classID) {
        $students = Students::where('class_id', $classID)->get();
        return view('students', compact('students', 'classID'));
    }

    public function create($classID) {
        return view('tambah_siswa', compact('classID'));
    }

    public function store($classID) {
        Students::create([
            'class_id'=> $classID,
            'name'=>request()->name,
            'mentor'=>request()->mentor,
            'status'=>request()->status,
        ]);
        return redirect($classID.'/student');
    }

    public function assign($studentID) {
        $user = request()->user();
        $student = Students::find($studentID);

        $student->users()->attach($user->id);
        return redirect($studentID. '/student');
    }
}
