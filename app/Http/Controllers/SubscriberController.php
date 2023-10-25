<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Subscriber;


class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers')->with('subscribers',$subscribers);   
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
        ]);
        try {
            $message = Subscriber::create($validatedData);
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
        try {
            // Encuentra la categoría por su ID
            $subscriber = Subscriber::find($id);
            // Verifica si la categoría existe
            if (!$subscriber) {
                return response()->json(['status' => 'error', 'message' => 'Subscritor no encontrado'], 404);
            }
            // Elimina la categoría
            $subscriber->delete();
            $subscribers = Subscriber::all();
            return response()->json(['status' => 'success', 'subscribers' => $subscribers], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar el subscritor: ' . $e->getMessage()], 500);
        }
    }
}
