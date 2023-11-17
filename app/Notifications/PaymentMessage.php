<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentMessage extends Notification
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
            ->line($this->message['header'])
            ->line('Gracias por su compra '. $this->message['name'] .'!')
            ->line('Código de compra: '. $this->message['code'])
            ->line('Detalles del pedido: ') // Muestra el nombre del remitente
            ->line('Productos: ' . $this->message['details']) // Muestra el correo electrónico del remitente
            ->line('Cantidad: ' . $this->message['counts']) // Muestra el correo electrónico del remitente
            ->line('Subtotal: ' . $this->message['subtotal']) // Muestra el correo electrónico del remitente
            ->line('Envio: ' . $this->message['envio']) // Muestra el correo electrónico del remitente
            ->line('Total: ' . $this->message['total']) // Muestra el correo electrónico del remitente
            ->line('Envío: ' . $this->message['shipping']) // Muestra el correo electrónico del remitente
            ->line('Mensaje: ' . $this->message['message']) // Muestra el mensaje del remitente
            ->line($this->message['messagetwo']); // Muestra el mensaje del remitente
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
