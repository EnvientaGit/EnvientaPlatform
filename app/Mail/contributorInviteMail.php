<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contributorInviteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $projectName, $projectUrl)
    {
        $this->user = $user;
        $this->projectName = $projectName;
        $this->projectUrl = $projectUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contributorinvite')
        ->from($this->user->email, $this->user->realname)
        ->subject('Invite to: ' . $this->projectName)
        ->with([
           'user' => $this->user,
           'projectName' => $this->projectName,
           'projectUrl' => $this->projectUrl
        ]);
    }
}
