<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClassroomController extends Controller
{
    //
    public function index(): View
    {
        $classrooms = Classroom::all();

        return view('classroom.index', [
            'title' => 'Classroom',
            'classrooms' => $classrooms
        ]);
    }

    public function create(): View
    {
        return view('classroom.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'major' => ['required', 'string', 'max:50'],
        ]);

        Classroom::create($validated);

        return redirect()->route('admin.classrooms.index')->with('success', 'Data kelas berhasil ditambahkan.');
    }
}
