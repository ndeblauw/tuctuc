<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAccountCreatedForYou extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        sleep(2);

        return (new MailMessage)
            ->subject('New account created for you')
            ->greeting('Hello '.$notifiable->name)
            ->line('Thank you for making a comment to our site content.')
            ->line('We created an account for you, in case you would want to contribute further')
            ->line('To log in, please use the forgot password functionality at the login page to choose your own password')
            ->action('Login', route('login'))
            ->line('Thank you again for using tuctuc!')
            ->salutation('Best regards, Tuctuc team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
