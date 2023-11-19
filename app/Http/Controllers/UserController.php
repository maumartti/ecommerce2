<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\User;
use App\Models\Region;


class UserController extends Controller
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
        $user = User::find(1);
        $regions = Region::all();
        return view('admin.profile')->with('web',$web)->with('user',$user)->with('regions',$regions);   
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
        //
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
        try {
            $user = User::find($id);
            if (!$user) {
                return response()->json(['status' => 'error', 'message' => 'Usuario no encontrado'], 404);
            }
            $validatedData = $request->validate([
                'name' => 'required|string|max:26',
                //'email' => 'string|max:255|required|email',
                'image' => 'nullable',
                'company' => 'string|nullable',
                'address' => 'string|nullable',
                'city' => 'string|nullable',
                'zip' => 'nullable',
                'countryCode' => 'nullable',
                'cel' => 'string|nullable',
                'region_id' => 'nullable'
            ]);
            $tools = new Tools;
            // Guardar la imagen Portada
            if(isset($validatedData['image'])){
                if ($validatedData['image'] !== '' && $validatedData['image'] !== null && Tools::isValidJson($request->image)) {
                    $validatedData['image'] = $tools->saveImage64('/assets/images/users/', $request->image);
                } elseif($validatedData['image'] == 'empty'){
                    $validatedData['image'] = null;   
                }else{
                    $validatedData['image'] = $user->image;
                }
            }else{
                $validatedData['image'] = $user->image;
            }   
            $user->update($validatedData);
            return response()->json(['status' => 'success', 'user' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al actualizar el usuario: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
