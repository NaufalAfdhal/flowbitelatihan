<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    // Method to display the student list
    public function index() {

        $studentsadmin = Student::with(['grade', 'department'])->get();
        $studentsadmin = Student::all();

        return view('student-admin', [
            'title' => "Student",
            'students' => $studentsadmin
            // 'students' => [
            //     [
            //         'id' => 1,
            //         'name' => "Daffa",
            //         'grade' => "11 PPLG 1",
            //         'email' => "irawandaffa910@gmail.com",
            //         'address' => "Kudus",
            //     ],
            //     [
            //         'id' => 2,
            //         'name' => "Budi",
            //         'grade' => "11 PPLG 2",
            //         'email' => "budi123@gmail.com",
            //         'address' => "Gajahmungkur",
            //     ],
            //     [
            //         'id' => 3,
            //         'name' => "Honam",
            //         'grade' => "11 PPLG 1",
            //         'email' => "siti456@gmail.com",
            //         'address' => "Pecangaan",
            //     ],
            //     [
            //         'id' => 4,
            //         'name' => "Ahmad",
            //         'grade' => "11 PPLG 2",
            //         'email' => "ahmad789@gmail.com",
            //         'address' => "Kaliori",
            //     ],
            //     [
            //         'id' => 5,
            //         'name' => "Rina",
            //         'grade' => "11 DKV 2",
            //         'email' => "rina012@gmail.com",
            //         'address' => "Pedurungan",
            //     ],
            // ]
        ]);
    }

    
    public function create() {
        return view('student.create', ['title' => "Tambah Student"]);
    }    

 
    public function store(Request $request) {

        return redirect()->route('student');
    }
}
