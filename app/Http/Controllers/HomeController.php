<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $web = Web::find(1);
        return view('admin.home')->with('web',$web);
    }

    public function saveData(Request $request) {
        try {
            $data = $request->all();
            $tools = new Tools;
            // Guardar la imagen Logo
            if ($request->has('imageLogo') && $request->imageLogo !== 'null') {
                $data['imageLogo'] = $tools->saveImage64('/assets/images/', $request->imageLogo);
            } else {
                unset($data['imageLogo']);
            }
            //imagenes de rotor
            if ($request->has('imageRotor1') && $request->imageRotor1 !== 'null') {
                $data['imageRotor1'] = $tools->saveImage64('/assets/images/', $request->imageRotor1);
            } else {
                unset($data['imageRotor1']);
            }
            if ($request->has('imageRotor2') && $request->imageRotor2 !== 'null') {
                $data['imageRotor2'] = $tools->saveImage64('/assets/images/', $request->imageRotor2);
            } else {
                unset($data['imageRotor2']);
            }
            if ($request->has('imageRotor3') && $request->imageRotor3 !== 'null') {
                $data['imageRotor3'] = $tools->saveImage64('/assets/images/', $request->imageRotor3);
            } else {
                unset($data['imageRotor3']);
            }

            $web = Web::find(1);
            $web->update($data);
            
            return response()->json(['message' => 'Data saved successfully'], 200);            
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data'], 500);
        }
    }
    
}
