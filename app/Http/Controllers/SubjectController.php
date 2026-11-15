<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class SubjectController extends Controller
{
    //
    public function index(): View
    {
        $subjects = Subject::all();

        return view('admin.Subjects', [
            'title' => 'Subjects',
            'subjects' => $subjects,
        ]);
    }

    public function create(): View
    {
        return view('admin.subject-create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        Subject::create($validated);

        return redirect()->route('admin.subjects.index')->with('success', 'Data mata pelajaran berhasil ditambahkan.');
    }
}
