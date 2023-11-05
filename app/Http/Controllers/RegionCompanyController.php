<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\ShippingCompany;
use App\Models\Region;
use App\Models\RegionCompany;


class RegionCompanyController extends Controller
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
            'region_id' => 'required',
            'company_id' => 'required|array',
        ]);

        try {
            $region_id = $validatedData['region_id'];
            $company_ids = $validatedData['company_id'];
            foreach ($company_ids as $company_id) {
                $existingRegionCompany = RegionCompany::where('region_id', $region_id)->where('company_id', $company_id)->first();
                if (!$existingRegionCompany) {
                    RegionCompany::create(['region_id' => $region_id,'company_id' => $company_id,]);
                }
            }
            $regionCompanies = RegionCompany::all();
            return response()->json(['status' => 'success', 'regionCompanies' => $regionCompanies], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la compania: ' . $e->getMessage()], 500);
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
            $regionCompany = RegionCompany::find($id);
            // Verifica si existe
            if (!$regionCompany) {
                return response()->json(['status' => 'error', 'message' => 'Región-Empresa no encontrada'], 404);
            }
            // Elimina
            $regionCompany->delete();
            $regionCompanies = RegionCompany::all();
            return response()->json(['status' => 'success', 'regionCompanies' => $regionCompanies], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error al eliminar la Región-Empresa: ' . $e->getMessage()], 500);
        }
    }
}
