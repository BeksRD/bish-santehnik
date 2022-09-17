<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;
class SendNotification extends Notification
{
    public $data;
    public function __construct($data)
    {
        $this->data = implode(',', $data);
    }

    use Queueable;
    public function via($notifiable): array
    {
        return ['telegram'];
    }
    public function toTelegram($notifiable): TelegramMessage
    {
//        $data = implode(',', $content);
        return TelegramMessage::create()
            ->to('-725701715')
            ->content($this->data);
    }
}
