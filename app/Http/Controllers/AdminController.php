<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.index', [
            'movies' => $movies
        ]);
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);
        Movie::create($formData);
        return redirect('/admin');
    }
}
