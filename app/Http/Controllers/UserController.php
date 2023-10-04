<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
use App\Models\JobSave;
use Auth;

class UserController extends Controller
{
    public function show()
    {
        $profile = User::findOrFail(Auth::user()->id);

        return view('backend.user.show', compact('profile'));
    }

    public function appliedJobs()
    {
        $appliedJobs = Application::where('job_id', Auth::user()->id)->get();
        // dd($appliedJobs[0]->job_title);

        return view('backend.user.applied_jobs', compact('appliedJobs'));
    }

    public function savedJobs()
    {
        $savedJobs = JobSave::where('user_id', Auth::user()->id)->get();

        return view('backend.user.saved_jobs', compact('savedJobs'));
    }
}
