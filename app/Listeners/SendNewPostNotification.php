<?php

namespace App\Listeners;

use App\Events\NewPostCreated;
use App\Mail\PostCreatedNotification;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewPostNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewPostCreated  $event
     * @return void
     */
    public function handle(NewPostCreated $event)
    {
        $users = User::all();
        $post = $event->post;
        foreach($users as $user){
            Mail::to($user->email)->send(new PostCreatedNotification($post));
        }
    }
}
