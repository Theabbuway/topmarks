<?php
namespace App\Observers;

use App\assignment;

class assignmentObserver
{
    
    /**
     * Listen to the assignment creating event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function creating(assignment $assignment)
    {
        //code...
    }

     /**
     * Listen to the assignment created event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function created(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment updating event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function updating(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment updated event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function updated(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment saving event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function saving(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment saved event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function saved(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment deleting event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function deleting(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment deleted event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function deleted(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment restoring event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function restoring(assignment $assignment)
    {
        //code...
    }

    /**
     * Listen to the assignment restored event.
     *
     * @param  assignment  $assignment
     * @return void
     */
    public function restored(assignment $assignment)
    {
        //code...
    }
}