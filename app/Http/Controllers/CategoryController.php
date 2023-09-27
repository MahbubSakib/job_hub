<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Job;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        // dd($category->name);

        $jobs = Job::where('category', $category->name)
                    ->take(5)
                    ->orderBy('created_at', 'desc')
                    ->get();
                    // dd($jobs);

        return view('backend.category.show', compact('category', 'jobs'));
    }
}
