<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'John Doe', 'age' => 20],
            ['id' => 2, 'name' => 'Jane Smith', 'age' => 22],
            ['id' => 3, 'name' => 'Alice Johnson', 'age' => 19],
        ];
        return view('admin.about', [
            'title' => "About",
            'nama' => "Galuh Adjie Abiyyu Akbar",
            'kelas' => "XI PPLG 3",
        ]);
    }
}
