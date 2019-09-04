<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $au = new Student;
        // $au->nama       = $request->nama;
        // $au->email      = $request->email;
        // $au->nim        = $request->nim;
        // $au->jurusan    = $request->jurusan;
        // $au->save();

        // Student::create([
        //     'nama'      => $request->nama,
        //     'nim'       => $request->nim,
        //     'email'     => $request->email,
        //     'jurusan'   => $request->jurusan
        // ]);

        $request->validate([
            'nama'      => 'required',
            'nim'       => 'required|size:10'
        ]);

        // request yang diambil dari $fillable didalam model
        Student::create($request->all());
        return redirect('/students')->with('status', 'data added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama'      => 'required',
            'nim'       => 'required|size:10'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nama'      => $request->nama,
                'nim'       => $request->nim,
                'email'     => $request->email,
                'jurusan'   => $request->jurusan,
            ]);
        return redirect('/students')->with('status', 'data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'data deleted!');
    }
}
