<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\ShippingCompany;
use App\Models\RegionCompany;
use App\Models\ShippingOfficeCompanyRegion;

class ShippingOfficeCompanyRegionController extends Controller
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
        $validatedData = $request->validate([
            'address_office' => 'required|string|max:255',
            'region_id' => 'required',
            'company_id' => 'required',
        ]);

        try {
            $region_id = $validatedData['region_id'];
            $company_id = $validatedData['company_id'];
            $address_office = $validatedData['address_office'];
            $existingOffice = ShippingOfficeCompanyRegion::where('region_id', $region_id)->where('company_id', $company_id)->where('address_office', $address_office)->first();
            if (!$existingOffice) {
                $office = ShippingOfficeCompanyRegion::create($validatedData);
            }
            return response()->json(['status' => 'success', 'office' => $office], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear el local: ' . $e->getMessage()], 500);
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
            // Encuentra por su ID
            $office = ShippingOfficeCompanyRegion::find($id);
            // Verifica si existe
            if (!$office) {
                return response()->json(['status' => 'error', 'message' => 'Sucursal no encontrado'], 404);
            }
            // Elimina
            $office->delete();
            //$this->logActivity('Envíos','Eliminación de sucursal transportista', $office->name);
            $companies = ShippingCompany::with('offices')->get();
            return response()->json(['status' => 'success', 'companies' => $companies], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar la Empresa: ' . $e->getMessage()], 500);
        }
    }
}
