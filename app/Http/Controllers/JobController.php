<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function show($id)
    {
        $job = Job::findOrFail($id);
        $relatedJobs = Job::where('category',  $job->category)
                          ->where('id', '!=', $id)
                          ->get();
        $relatedJobsCount = Job::where('category',  $job->category)
                              ->where('id', '!=', $id)
                               ->count();
        // dd($relatedJobsCount);
        return view('backend.job.show', compact('job', 'relatedJobs', 'relatedJobsCount'));
    }
}
