<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('job.index', ['jobs' => Job::all()]);
    }

    public function about(): View
    {
        return view('job.about');
    }

    public function contact(): View
    {
        return view('job.contact');
    }
}
