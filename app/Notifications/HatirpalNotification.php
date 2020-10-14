<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HatirpalNotification extends Notification
{
    use Queueable;
    protected $property;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($property)
    {
        $this->property=$property;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
     public function via($notifiable)
    {
        return ['database'];

    }
    public function toDatabase($notifiable)
    {
        return [
         'shopCreated'=> $this->property,
         'user'=>auth()->user()
        ];
    }
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    // public function toMail($notifiable)
    // {
    //             return (new MailMessage)
    //             ->greeting('Hellow Viwers')
    //             ->subject($this->property->name)
    //             ->line('New Post By'.$this->property->user->name)
    //             ->action('Click here to view the News', route('property.detail',$this->property->id))
    //             ->line('Na Dekhle Chram Miss');
    // }

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
