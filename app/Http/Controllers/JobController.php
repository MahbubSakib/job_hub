<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobSave;
use App\Models\Application;
use Auth;

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
        $jobSaved = JobSave::where('job_id', $id)
                            ->where('user_id', Auth::user()->id)
                            ->count();
        
        return view('backend.job.show', compact('job', 'relatedJobs', 'relatedJobsCount', 'jobSaved'));
    }

    public function jobSave(Request $request)
    {
        $jobSave = JobSave::create([
            'job_id' => $request->id,
            'user_id' => $request->user_id,
            'job_title' => $request->job_title,
            'company' => $request->company,
            'job_photo' => $request->photo,
            'job_region' => $request->job_region,
            'job_type' => $request->job_type,
        ]);
        return redirect()->back()->with('successMsg', 'Job has been saved');
    }

    public function jobApply(Request $request)
    {
        if(!empty(Auth::user()->cv)){
            $jobApply = Application::create([
                'cv' => Auth::user()->cv,
                'job_id' => $request->id,
                'user_id' => Auth::user()->id,
                'job_title' => $request->job_title,
                'company' => $request->company,
                'job_photo' => $request->photo,
                'job_region' => $request->job_region,
                'job_type' => $request->job_type,
            ]);

            return redirect()->back()->with('jobApplied', 'You have applied for this job successfully!');
        }else{
            return redirect()->back()->with('noCV', 'Please upload your CV first');
        }
    }
}
