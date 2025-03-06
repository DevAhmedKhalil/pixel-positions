<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can delete the job.
     *
     * @param User $user
     * @param Job $job
     * @return bool
     */
    public function delete(User $user, Job $job): bool
    {
        // Ensure the user has an employer record and then check ownership.
        return $user->employer && $user->employer->id === $job->employer_id;
    }
}
