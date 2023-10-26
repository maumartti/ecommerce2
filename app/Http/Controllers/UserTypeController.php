<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\User;
use App\Models\UserType;


class UserTypeController extends Controller
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
        return view('admin.home')->with('web',$web);   
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
            $userType = UserType::find($id);
    
            if (!$userType) {
                return response()->json(['status' => 'error', 'message' => 'Tipo de usuario no encontrado'], 404);
            }
            // Obtén todos los campos del formulario que son checkboxes
            $checkboxFields = array_keys($request->all());
            // Obtén una lista de todos los campos que deberían estar en la solicitud
            $expectedFields = [
                'category_show',
                'category_edit',
                'category_delete',

                'product_show',
                'product_edit',
                'product_delete',

                'sales_show',
                'sales_edit',
                'sales_delete',

                'shipping_show',
                'shipping_edit',
                'shipping_delete',

                'user_show',
                'user_edit',
                'user_delete',
            
                'activity_show',
                'activity_edit',
                'activity_delete',

                'profile_show',
                'profile_edit',
                'profile_delete',

                'blog_show',
                'blog_edit',
                'blog_delete',

                'message_show',
                'message_edit',
                'message_delete',

                'subscriber_show',
                'subscriber_edit',
                'subscriber_delete',

                'general_slider_show',
                'general_slider_edit',
                'general_slider_delete',
                'general_logo_show',
                'general_logo_edit',
                'general_logo_delete',
                'general_color_show',
                'general_color_edit',
                'general_color_delete',
                'general_contact_show',
                'general_contact_edit',
                'general_contact_delete',
                'general_filter_show',
                'general_filter_edit',
                'general_filter_delete',
                'general_about_show',
                'general_about_edit',
                'general_about_delete'
            ];
    
            $validatedData = [];
            // Itera sobre los campos esperados y establece sus valores en $validatedData
            foreach ($expectedFields as $field) {
                if (in_array($field, $checkboxFields)) {
                    $validatedData[$field] = $request->has($field) ? 1 : 0;
                } else {
                    // Si el campo no está en la solicitud, establece su valor en 0
                    $validatedData[$field] = 0;
                }
            }
            // Actualiza el modelo con los datos validados
            $userType->update($validatedData);
    
            $userTypeUsuario = UserType::find(1);
            $userTypeVendedor = UserType::find(2);
            $userTypeAdministrador = UserType::find(3);
    
            return response()->json([
                'status' => 'success',
                'userTypeUsuario' => $userTypeUsuario,
                'userTypeVendedor' => $userTypeVendedor,
                'userTypeAdministrador' => $userTypeAdministrador,
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al actualizar el tipo de usuario: ' . $e->getMessage()], 500);
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
