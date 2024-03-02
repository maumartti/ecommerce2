<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tools;
use Carbon\Carbon;
use App\Models\Web;
use App\Models\Payment;
use App\Models\User;

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

        //grafico de torta
        $initialCount = Payment::where('status', 'INICIAL')->count();
        $authorizedCount = Payment::where('status', 'AUTHORIZED')->count();
        $authorizedEnvCount = Payment::where('status', 'AUTHORIZED ENVIADO')->count();
        // Calculate percentages
        $totalCount = $initialCount + $authorizedCount + $authorizedEnvCount;
        if($totalCount > 0){
            $initialPercentage = ($initialCount / $totalCount) * 100;
            $authorizedPercentage = ($authorizedCount / $totalCount) * 100;
            $authorizedEnvPercentage = ($authorizedEnvCount / $totalCount) * 100;
        }else{
            $initialPercentage = 0;
            $authorizedPercentage = 0;
            $authorizedEnvPercentage = 0;
        }
        // Create $dataGraph array
        $dataGraph = [$initialPercentage, $authorizedPercentage, $authorizedEnvPercentage];
        //END
        $currentMonth = Carbon::now()->month;//este mes
        $lastMonth = Carbon::now()->subMonth()->month;//mes pasado
        $paymentsAllCount = Payment::count();//todos los pedidos
        $salesAllCount = Payment::whereIn('status', ['AUTHORIZED', 'AUTHORIZED ENVIADO'])->count();//todas las ventas
        //datos de este mes
        $ordersMonthCount = Payment::where('status', 'INICIAL')->whereMonth('created_at', $currentMonth)->count();//pedidos del mes
        $salesMonthCount = Payment::whereIn('status', ['AUTHORIZED', 'AUTHORIZED ENVIADO'])->whereMonth('created_at', $currentMonth)->count();//ventas del mes
        //datos del mes pasado
        $ordersLastMonthCount = Payment::where('status', 'INICIAL')->whereMonth('created_at', $currentMonth)->count();//pedidos del mes
        $salesLastMonthCount = Payment::whereIn('status', ['AUTHORIZED', 'AUTHORIZED ENVIADO'])->whereMonth('created_at', $currentMonth)->count();//ventas del mes
        $usersCount = User::where('type_id', 1)->count();//usuarios tipo clientes

        // Calculate percentage difference
        $differenceSalesLastMonth = 0;
        $differenceOrdersLastMonth = 0;
        if ($salesLastMonthCount > 0) {
            $differenceSalesLastMonth = (($salesMonthCount - $salesLastMonthCount) / $salesLastMonthCount) * 100;
        }
        if ($ordersLastMonthCount > 0) {
            $differenceOrdersLastMonth = (($ordersMonthCount - $ordersLastMonthCount) / $ordersLastMonthCount) * 100;
        }
        //ARRAY DE VENTAS DEL MES POR DIA
        $daysInMonth = Carbon::now()->daysInMonth;
        $salesByDayMonth = array_fill(1, $daysInMonth, 0);
        $sales = Payment::whereIn('status', ['AUTHORIZED', 'AUTHORIZED ENVIADO'])
            ->whereMonth('created_at', $currentMonth)
            ->get();
        
        foreach ($sales as $sale) {
            $day = Carbon::parse($sale->created_at)->day;
            $salesByDayMonth[$day]++;
        }
        $salesByDayMonth = [0] + $salesByDayMonth;
        $salesByDayMonth = array_values($salesByDayMonth);
        //END ---
        //ARRAY DE VENTAS DEL MES PASADO POR DIA
        $firstDayOfCurrentMonth = Carbon::now()->firstOfMonth();
        $firstDayOfPreviousMonth = $firstDayOfCurrentMonth->copy()->subMonth();
        $daysInPreviousMonth = $firstDayOfPreviousMonth->daysInMonth;
        $salesByDayLastMonth = array_fill(1, $daysInPreviousMonth, 0);
        
        $sales = Payment::whereIn('status', ['AUTHORIZED', 'AUTHORIZED ENVIADO'])
            ->whereBetween('created_at', [
                $firstDayOfPreviousMonth->copy()->startOfDay(),
                $firstDayOfPreviousMonth->copy()->endOfMonth(),
            ])->get();
        
        foreach ($sales as $sale) {
            $day = Carbon::parse($sale->created_at)->day;
            $salesByDayLastMonth[$day]++;
        }
        $salesByDayLastMonth = [0] + $salesByDayLastMonth;
        $salesByDayLastMonth = array_values($salesByDayLastMonth);
       // dd($salesByDayLastMonth);
        //END ---
       //dd($firstDayOfPreviousMonth);
       if(Auth::user()->type_id !== 1){
           return view('admin.home')->with('web',$web)
           ->with('dataGraph',$dataGraph)
           ->with('paymentsAllCount',$paymentsAllCount)
           ->with('salesAllCount',$salesAllCount)
           ->with('ordersMonthCount',$ordersMonthCount)
           ->with('salesMonthCount',$salesMonthCount)
           ->with('differenceSalesLastMonth',$differenceSalesLastMonth)
           ->with('differenceOrdersLastMonth',$differenceOrdersLastMonth)
           ->with('salesByDayMonth',$salesByDayMonth)
           ->with('salesByDayLastMonth',$salesByDayLastMonth)
           ->with('usersCount',$usersCount);
        }else{
            return redirect('/admin/profile');

       }
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
        //dd($request->all());
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
            //img 4
            if(isset($data['imageRotor4'])){
                if ($data['imageRotor4'] !== '' && $data['imageRotor4'] !== null && Tools::isValidJson($request->imageRotor4)) {
                    $data['imageRotor4'] = $tools->saveImage64('/assets/images/', $request->imageRotor4);
                } elseif($data['imageRotor4'] == 'empty'){
                    $data['imageRotor4'] = null;   
                }else{
                    $data['imageRotor4'] = $web->imageRotor4;
                }
            }else{
                $data['imageRotor4'] = $web->imageRotor4;
            }
            //img 5
            if(isset($data['imageRotor5'])){
                if ($data['imageRotor5'] !== '' && $data['imageRotor5'] !== null && Tools::isValidJson($request->imageRotor5)) {
                    $data['imageRotor5'] = $tools->saveImage64('/assets/images/', $request->imageRotor5);
                } elseif($data['imageRotor5'] == 'empty'){
                    $data['imageRotor5'] = null;   
                }else{
                    $data['imageRotor5'] = $web->imageRotor5;
                }
            }else{
                $data['imageRotor5'] = $web->imageRotor5;
            }
            //img pagina contacto
            if(isset($data['imageContact'])){
                if ($data['imageContact'] !== '' && $data['imageContact'] !== null && Tools::isValidJson($request->imageContact)) {
                    $data['imageContact'] = $tools->saveImage64('/assets/images/', $request->imageContact);
                } elseif($data['imageContact'] == 'empty'){
                    $data['imageContact'] = null;   
                }else{
                    $data['imageContact'] = $web->imageContact;
                }
            }else{
                $data['imageContact'] = $web->imageContact;
            }
            //img pagina blog
            if(isset($data['imageBlog'])){
                if ($data['imageBlog'] !== '' && $data['imageBlog'] !== null && Tools::isValidJson($request->imageBlog)) {
                    $data['imageBlog'] = $tools->saveImage64('/assets/images/', $request->imageBlog);
                } elseif($data['imageBlog'] == 'empty'){
                    $data['imageBlog'] = null;   
                }else{
                    $data['imageBlog'] = $web->imageBlog;
                }
            }else{
                $data['imageBlog'] = $web->imageBlog;
            }

            unset($data['btnAddTag']);//borramos si existe
            
            $web->update($data);
            $this->logActivity('Generales Web','Actualizar', 'rotor, logo, color, info contacto, filtros');//registramos Acción
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data:' . $e], 500);
        }
    }
    public function saveDataAbout(Request $request) {
        try {
            $data = $request->all();
            $tools = new Tools;

            $web = Web::find(1);
            //return $data;
            // Guardar la imagen pagina about 
            if(isset($data['imageAbout'])){
                if ($data['imageAbout'] !== '' && $data['imageAbout'] !== null && Tools::isValidJson($request->imageAbout)) {
                    $data['imageAbout'] = $tools->saveImage64('/assets/images/', $request->imageAbout);
                } elseif($data['imageAbout'] == 'empty'){
                    $data['imageAbout'] = null;   
                }else{
                    $data['imageAbout'] = $web->imageAbout;
                }
            }else{
                $data['imageAbout'] = $web->imageAbout;
            }    
            // Imagenes about 1
            if(isset($data['aboutImageText1'])){
                if ($data['aboutImageText1'] !== '' && $data['aboutImageText1'] !== null && Tools::isValidJson($request->aboutImageText1)) {
                        $data['aboutImageText1'] = $tools->saveImage64('/assets/images/', $request->aboutImageText1);
                } elseif($data['aboutImageText1'] == 'empty'){
                    $data['aboutImageText1'] = null;   
                }else{
                    $data['aboutImageText1'] = $web->aboutImageText1;
                }
            }else{
                $data['aboutImageText1'] = $web->aboutImageText1;
            }
            //image about 2
            if(isset($data['aboutImageText2'])){
                if ($data['aboutImageText2'] !== '' && $data['aboutImageText2'] !== null && Tools::isValidJson($request->aboutImageText2)) {
                    $data['aboutImageText2'] = $tools->saveImage64('/assets/images/', $request->aboutImageText2);
                } elseif($data['aboutImageText2'] == 'empty'){
                    $data['aboutImageText2'] = null;   
                }else{
                    $data['aboutImageText2'] = $web->aboutImageText2;
                }
            }else{
                $data['aboutImageText2'] = $web->aboutImageText2;
            }
            //dd($data);
            unset($data['btnAddTag']);//borramos si existe
            $web->update($data);
            $this->logActivity('Generales Web','Actualizar', 'Datos de página nosotros');//registramos Acción
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while saving data:' . $e], 500);
        }
    }

    public function settings(Request $request){
        $web = Web::find(1);
       // dd($web);
        return view('admin.settings')->with('web',$web);
    }
    
    // public function addTag(Request $request){

    // }
}
