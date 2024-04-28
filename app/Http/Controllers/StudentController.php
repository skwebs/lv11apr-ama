<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('uuid')->get();
        $trashed_number = Student::onlyTrashed()->count();
        // dd($trashed_number);

        return view('v1.students.index', compact('students', 'trashed_number'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('v1.students.create');
    }

    /**student
     * Store a newly created resource in storage.
     */
    public function store(StudentCreateRequest $request)
    {


        $student = Student::create($request->only(['name', 'gender', 'date_of_birth', 'aadhaar_number']));

        return to_route('student.index', ['id' => 1]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return $student->name;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
        return $student->name . ' :: edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back()->withInput(['success' => 'Trashed successfully']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function trashed()
    {
        $students = Student::onlyTrashed()->get();
        return view('v1.students.trashed', compact('students'));
    }
    public function restore(Student $student)
    {
        // $student = Student::withTrashed()->find($id);
        $student->restore();
        // dd($student);
        return redirect()->back()->withInput(['success' => 'Restored successfully']);
    }

    public function deleteForever(Student $student)
    {
        // dd($student);
        $student->forceDelete();

        return redirect()->back()->withInput(['success' => 'Deleted successfully']);
    }
}
