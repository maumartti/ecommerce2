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
/*
    public function saveData(Request $request) {
        try {
            $data = $request->all();
            $web = Web::find(1);
    
            $this->updateImage($data, $web, 'imageLogo');
            $this->updateImage($data, $web, 'imageRotor1');
            $this->updateImage($data, $web, 'imageRotor2');
            $this->updateImage($data, $web, 'imageRotor3');
    
            $web->update($data);
    
            return response()->json(['message' => 'Data saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data'], 500);
        }
    }
    
    private function updateImage(&$data, $web, $imageName) {
        if (isset($data[$imageName])) {
            $imageData = $data[$imageName];
    
            if ($imageData === 'empty') {
                $data[$imageName] = null;
            } elseif (Tools::isValidJson($imageData)) {
                $data[$imageName] = Tools::saveImage64('/assets/images/', $imageData);
            } else {
                $data[$imageName] = $web->{$imageName};
            }
        } else {
            $data[$imageName] = $web->{$imageName};
        }
    }*/



    public function saveData(Request $request) {
        try {
            $data = $request->all();
            $tools = new Tools;

            $web = Web::find(1);
            //return $data;
            // Guardar la imagen Logo
            if(isset($data['imageLogo'])){
                if ($data['imageLogo'] !== '' && $data['imageLogo'] !== null && Tools::isValidJson($request->imageLogo)) {
                    $data['imageLogo'] = $tools->saveImage64('/assets/images/', $request->imageLogo);
                } elseif($data['imageLogo'] == 'empty'){
                    $data['imageLogo'] = null;   
                }else{
                    $data['imageLogo'] = $web->imageLogo;
                }
            }else{
                $data['imageLogo'] = $web->imageLogo;
            }    

            // Imagenes de rotor
            if(isset($data['imageRotor1'])){
                if ($data['imageRotor1'] !== '' && $data['imageRotor1'] !== null && Tools::isValidJson($request->imageRotor1)) {
                        $data['imageRotor1'] = $tools->saveImage64('/assets/images/', $request->imageRotor1);
                } elseif($data['imageRotor1'] == 'empty'){
                    $data['imageRotor1'] = null;   
                }else{
                    $data['imageRotor1'] = $web->imageRotor1;
                }
            }else{
                $data['imageRotor1'] = $web->imageRotor1;
            }
            //img 2
            if(isset($data['imageRotor2'])){
                if ($data['imageRotor2'] !== '' && $data['imageRotor2'] !== null && Tools::isValidJson($request->imageRotor2)) {
                    $data['imageRotor2'] = $tools->saveImage64('/assets/images/', $request->imageRotor2);
                } elseif($data['imageRotor2'] == 'empty'){
                    $data['imageRotor2'] = null;   
                }else{
                    $data['imageRotor2'] = $web->imageRotor2;
                }
            }else{
                $data['imageRotor2'] = $web->imageRotor2;
            }
            //img 3
            if(isset($data['imageRotor3'])){
                if ($data['imageRotor3'] !== '' && $data['imageRotor3'] !== null && Tools::isValidJson($request->imageRotor3)) {
                    $data['imageRotor3'] = $tools->saveImage64('/assets/images/', $request->imageRotor3);
                } elseif($data['imageRotor3'] == 'empty'){
                    $data['imageRotor3'] = null;   
                }else{
                    $data['imageRotor3'] = $web->imageRotor3;
                }
            }else{
                $data['imageRotor3'] = $web->imageRotor3;
            }

            $web->update($data);
    
            return response()->json(['message' => 'Data saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data'], 500);
        }
    }

    public function settings(Request $request){
        $web = Web::find(1);
        return view('admin.settings')->with('web',$web);
    }
    
}
