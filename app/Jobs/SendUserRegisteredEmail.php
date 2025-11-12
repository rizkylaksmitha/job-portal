<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegisteredMail;
use App\Models\User; // <-- Pastikan ini ada

class SendUserRegisteredEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected int $userId;

    public function __construct(int $userId) 
    {
        $this->userId = $userId;
    }

    public function handle()
    {
        $user = User::findOrFail($this->userId); 
        
        Mail::to($user->email)->send(new UserRegisteredMail($user));
    }
}