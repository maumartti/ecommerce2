<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserMessage extends Notification
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
        $loginLink = config('app.url') . '/email/verifylink/' . encrypt($this->message['id']); // Utiliza la configuración de APP_URL del archivo .en

        return (new MailMessage)
            ->line('Bienvenido ' . $this->message['name'])
            ->line('Tipo de Cuenta: ' . $this->message['type'])
            ->line('Correo Electrónico: ' . $this->message['email'])
            ->line('Contraseña: ' . $this->message['password'])
            ->action('Inicia sesión aquí', $loginLink)
            ->line('Gracias por unirte a nosotros!');
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
