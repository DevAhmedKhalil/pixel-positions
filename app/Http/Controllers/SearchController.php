<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
//        dd(request('q'));
        $jobs = Job::where('title', 'like', '%' . request('q') . '%')->get();

        return view('results', ['jobs' => $jobs]);

    }
}
