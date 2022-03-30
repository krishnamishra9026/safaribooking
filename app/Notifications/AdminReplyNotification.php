<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminReplyNotification extends Notification
{
    use Queueable;
    private $billData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($billData)
    {
        $this->billData = $billData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
         return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // echo "<pre>";print_r($notifiable);"</pre>";exit;
        return (new MailMessage)
                    ->subject('Message Reply!')
                    ->line('Please check the details bellow!')
                    ->line($this->billData['body'])
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        echo "<pre>";print_r($notifiable);"</pre>";exit;
        return [
            'id' => $notifiable['id']
        ];
    }
}
