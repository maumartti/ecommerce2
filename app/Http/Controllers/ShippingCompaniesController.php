<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\ShippingCompany;


class ShippingCompaniesController extends Controller
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
            'name' => 'required|string|max:36',
            'image' => 'required',
        ]);

        try {
            $tools = new Tools;
            if ($validatedData['image'] !== '' && $validatedData['image'] !== null && Tools::isValidJson($validatedData['image'])) {
                $validatedData['image'] = $tools->saveImage64('/assets/images/companies/', $validatedData['image']);
            }
            $company = ShippingCompany::create($validatedData);
            return response()->json(['status' => 'success', 'company' => $company], 200);
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
        //
    }
}
