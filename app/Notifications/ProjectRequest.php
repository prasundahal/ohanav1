<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\NexmoMessage;

class ProjectRequest extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $notification;

    public function __construct($notification)
    {
        $this->notification = $notification;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    { 
        if($this->notification['type'] == 'admin'){
            // $url = route('projectrequestdetail', $this->notification['project_id']);
            return (new MailMessage)
            ->greeting('Hello!' . ' ' . $this->notification['admin_name'])
            ->subject('New Project Request')
            ->line($this->notification['customer_name']. ' '. 'has requested for new project');
            // ->action('View Request', $url);
        } else {
            return (new MailMessage)
            ->greeting('Hello!' . ' ' . $this->notification['customer_name'])
            ->subject('Response to project request')
            ->line('We have received your request to our project. We will contact you soon.')
            ->line('Thank you for using our application!');
            // ->line('https://link');
        }
        
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
        ->content('Hello '.$this->notification['customer_name'].'. &#x1F49F; You have requested for project demo. We will contact you soon. Thank you for using our application', 'unicode');
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
