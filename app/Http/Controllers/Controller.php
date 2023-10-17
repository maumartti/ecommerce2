<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function logActivity($module, $action, $item)
    {
        $user = Auth::user(); // Obtén el usuario autenticado
        Activity::create([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_type' => $user->type,
            'module' => $module,
            'action' => $action,
            'item' => $item,
        ]);
    }
}
