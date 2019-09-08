<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AppiontConfirmNotification extends Notification
{
    use Queueable;

    public $appoint_customer;

    public function __construct($appoint_customer)
    {
        $this->appoint_customer = $appoint_customer;
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
        return (new MailMessage)
                    ->greeting('Hello '.$this->appoint_customer->name)
                    ->subject('Booking Confirmation')
                    ->line('Your booking is successfully confirmed')
                    ->line('You will come your appointment date and time')
                    ->line('Visit our website for any appointment in our salon, we have qualityful barber for your service')
                    ->action('View', url(route('home')))
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
        return [
            //
        ];
    }
}
