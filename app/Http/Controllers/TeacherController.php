<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeacherController extends Controller
{
    //
    public function index(): View
    {
        $teachers = Teacher::all();

        return view('admin.Teacher', [
            'title' => 'Teacher',
            'teachers' => $teachers,
        ]);
    }

    public function create(): View
    {
        return view('admin.teacher-create', ['subjects' => Subject::all()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'niy' => ['required', 'digits_between:1,20', 'unique:teachers,niy'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'start_date' => ['required', 'date'],
        ]);

        Teacher::create($validated);

        return redirect()->route('admin.teachers.index')->with('success', 'Data guru berhasil ditambahkan.');
    }
}
