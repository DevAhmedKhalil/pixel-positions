<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // Jobs for this tag

        return view('results', ['jobs' => $tag->jobs]);
    }

    public function destroy(Job $job)
    {
        $this->authorize('delete', $job);
        $job->delete();
        return redirect('/')->with('success', 'Job deleted successfully.');
    }


}
