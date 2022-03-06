<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

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
        $mailMessage = new MailMessage();
        $project_name = $this->notification['project_name'] == null ? 'new project' : 'project ' . $this->notification['project_name'];
        if ($this->notification['type'] == 'admin') {
            $mailMessage->greeting('Hello!' . ' ' . $this->notification['admin_name'])
                ->subject('New Project Request')
                ->line($this->notification['customer_name'] . ' ' . 'has requested for ' . $project_name);
            return $mailMessage;
            // ->action('View Request', $url);
        } else {
            $mailMessage->greeting('Hello!' . ' ' . $this->notification['customer_name'])
                ->subject('Response to project request')
                ->line('We have received your request to our project.');
            if ($this->notification['project_url'] != null) {
                $mailMessage->line('Please click on link below to access demo request')
                    ->line($this->notification['project_url']);
            }
            $mailMessage->line('Thank you for using our application!');

            return $mailMessage;

            // ->line('https://link');
        }

    }
    // public function toMail($notifiable)
    // {
    //     $mailMessage = new MailMessage();
    //     if($this->notification['type'] == 'admin'){
    //         // $url = route('projectrequestdetail', $this->notification['project_id']);
    //         return (new MailMessage)
    //         ->greeting('Hello!' . ' ' . $this->notification['admin_name'])
    //         ->subject('New Project Request')
    //         ->line($this->notification['customer_name']. ' '. 'has requested for new project');
    //         // ->action('View Request', $url);
    //     } else {
    //         return (new MailMessage)
    //         ->greeting('Hello!' . ' ' . $this->notification['customer_name'])
    //         ->subject('Response to project request')
    //         ->line('We have received your request to our project. We will contact you soon.')
    //         ->line('Thank you for using our application!');
    //         // ->line('https://link');
    //     }

    // }

    public function toNexmo($notifiable)
    {
        if ($this->notification['project_url'] != null) {
            return (new NexmoMessage)
                ->content('Hello ' . $this->notification['customer_name'] . '. You have requested for project demo. Click on link to access demo ' .$this->notification['project_url']. "\n". ' Thank you for using our application');
        }
        return (new NexmoMessage)
            ->content('Hello ' . $this->notification['customer_name'] . '. You have requested for project demo.  Thank you for using our application');
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
