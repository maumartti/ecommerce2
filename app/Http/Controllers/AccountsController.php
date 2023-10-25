<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\User;
use App\Models\Region;

class AccountsController extends Controller
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
        $web = Web::find(1);
        $users = User::all();
        return view('admin.accounts')->with('web',$web)->with('users',$users);   
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
        if ($request->input('password') !== $request->input('password_confirmation')) {
            return response()->json(['error' => 'Los passwords no coinciden'], 422);
        }
        if (User::where('email', $request->input('email'))->exists()) {
            return response()->json(['error' => 'Ya existe un usuario con ese correo'], 422);
        }
        try {
            $validatedData = $request->validate([
                'type' => 'string|max:160|required',
                'name' => 'required|string|max:36',
                'email' => 'string|max:255|required|email|unique:users',
                'active' => 'required',
                'image' => 'json|nullable',
                'password' => 'string|required|min:8|confirmed',
            ]);
            $tools = new Tools;
            if ($validatedData['image'] !== '' && $validatedData['image'] !== null && Tools::isValidJson($validatedData['image'])) {
                $validatedData['image'] = $tools->saveImage64('/assets/images/users/', $validatedData['image']);
            }else{
                $validatedData['image'] = null;
            }
            //return $validatedData;
            $user = User::create($validatedData);
            $users = User::all();
            return response()->json(['status' => 'success', 'users' => $users], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data:' . $e], 500);
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
            $user = User::find($id);
            // Verifica si la categoría existe
            if (!$user) {
                return response()->json(['status' => 'error', 'message' => 'Usuario no encontrado'], 404);
            }
            // Elimina la categoría
            $user->delete();
            $users = User::all();
            return response()->json(['status' => 'success', 'users' => $users], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar el usuario: ' . $e->getMessage()], 500);
        }
    }
}
