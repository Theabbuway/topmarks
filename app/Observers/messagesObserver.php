<?php
namespace App\Observers;

use App\messages;

class messagesObserver
{
    
    /**
     * Listen to the messages creating event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function creating(messages $messages)
    {
        //code...
    }

     /**
     * Listen to the messages created event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function created(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages updating event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function updating(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages updated event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function updated(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages saving event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function saving(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages saved event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function saved(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages deleting event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function deleting(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages deleted event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function deleted(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages restoring event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function restoring(messages $messages)
    {
        //code...
    }

    /**
     * Listen to the messages restored event.
     *
     * @param  messages  $messages
     * @return void
     */
    public function restored(messages $messages)
    {
        //code...
    }
}