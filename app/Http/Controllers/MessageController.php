<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactMessage;
use App\Tools;
use App\Models\Web;
use App\Models\Message;


class MessageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages')->with('messages',$messages);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|max:100',
            'text' => 'required|string|max:255',
        ]);
    
        try {
            $message = Message::create($validatedData);
    
            // Enviar una notificación por correo electrónico aquí
            $notificationData = [
                'name' => $message->name, // Asegúrate de que tu modelo Message tenga un campo 'name'
                'email' => $message->email,
                'message' => $message->text,
            ];
    
            // Notificar al usuario por correo electrónico
            Notification::route('mail', config('mail.from.address'))
                ->notify(new ContactMessage($notificationData));
    
            return back()->with('success', 'El mensaje se ha enviado exitosamente.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error al crear el mensaje: ' . $e->getMessage());
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
