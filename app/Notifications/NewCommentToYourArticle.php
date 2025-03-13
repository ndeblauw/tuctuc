<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCommentToYourArticle extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Comment $comment)
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
            ->greeting('Hello '.$notifiable->name.',')
            ->subject('Your article '.$this->comment->article->title.'got a comment')
            ->line('Somebody wrote a comment to your article <strong>'.$this->comment->article->title.'</strong>')
            ->line('Here is the comment:<small><br>'.$this->comment->comment.'</small>')
            ->action('Manage the comment here', route('articles.show', $this->comment->article))
            ->line("If you don't like the comment, I'm sorry for you")
            ->salutation('Warm greetings from the tuctuc team');
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
