<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactMessage extends Notification
{
    use Queueable;

    protected $message; // Agrega una propiedad para almacenar el mensaje

    /**
     * Create a new notification instance.
     *
     * @param array $message Los datos del mensaje de contacto
     */
    public function __construct(array $message)
    {
        $this->message = $message;
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
        return (new MailMessage)
            ->line('Mensaje enviado desde la sección contacto')
            //->line('Nombre: ' . $this->message['name']) // Muestra el nombre del remitente
            ->line('Correo Electrónico: ' . $this->message['email']) // Muestra el correo electrónico del remitente
            ->line('Mensaje: ' . $this->message['message']); // Muestra el mensaje del remitente
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
