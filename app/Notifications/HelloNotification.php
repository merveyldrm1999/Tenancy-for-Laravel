<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Slack\BlockKit\Blocks\ContextBlock;
use Illuminate\Notifications\Slack\BlockKit\Blocks\SectionBlock;
use Illuminate\Notifications\Slack\SlackMessage;
use Illuminate\Queue\SerializesModels;

class HelloNotification extends Notification implements ShouldQueue
{
    use Queueable,SerializesModels;


    public function __construct()
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','slack'];
    }
    public function viaQueues(): array
    {
        return [
            'mail' => 'mail-queue',
        ];
    }
    public function toMail($user) : MailMessage
    {
        $tenantId = tenant("id");
        $userName = $user->name;
        $userEmail = $user->email;
        return (new MailMessage)
            ->view('notification', ['name' => $userName, 'email' => $userEmail, 'tenant' => $tenantId]);
    }



    public function toSlack(object $user): SlackMessage
    {
        $tenantId = tenant("id");
        $userName = $user->name;
        $userEmail = $user->email;

        return (new SlackMessage())
            ->text("Merhaba! Aramıza Hoş geldiniz! $userName. Mail : $userEmail. Şirket : $tenantId. ");

    }


}

