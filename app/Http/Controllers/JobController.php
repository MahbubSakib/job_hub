<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function show($id)
    {
        $job = Job::findOrFail($id);
        // dd($job);
        return view('backend.job.show', compact('job'));
    }
}
