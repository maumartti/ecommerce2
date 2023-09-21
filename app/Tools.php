<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tools extends Model
{
    public static function isValidJson($string) {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
    public static function saveImage64($path, $imageData) {
        $imageDataArray = json_decode($imageData, true); // Decode the JSON string
        if (!$imageDataArray || !isset($imageDataArray['output']['name']) || !isset($imageDataArray['output']['image'])) {
            return false; // Datos de imagen incorrectos
        }
        $extencion = pathinfo($imageDataArray['output']['name'], PATHINFO_EXTENSION);
        // Verificar si la extensión es '.jpg' y cambiarla a '.jpeg'
        if ($extencion === 'jpg') {
            $extencion = 'jpeg';
        }
        $imageBase64 = $imageDataArray['output']['image'];
        $image = str_replace('data:image/'.$extencion.';base64,', '', $imageBase64);
        $image = str_replace(' ', '+', $image);
        $imageName = Str::random(16) . '.' . $extencion; // Agrega el punto antes de la extensión
        $fullPath = public_path() . $path . $imageName;
        if (file_put_contents($fullPath, base64_decode($image))) {
            return $imageName;
        } else {
            return false; // Error al guardar la imagen
        }
    }
    

    public static function deleteImage($path,$fileName){
	    $old_image = public_path().$path.$fileName;
	    if (file_exists($old_image) && $fileName != 'null' && $fileName != null) {
	        unlink($old_image);
	    }
	}
    public static function generateUrl($string, $space="-") {
        $string = utf8_encode($string);
        if (function_exists('iconv')) {
            $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        }
        $string = preg_replace("/[^a-zA-Z0-9 \-]/", "", $string);
        $string = trim(preg_replace("/\\s+/", " ", $string));
        $string = strtolower($string);
        $string = str_replace(" ", $space, $string);
        $rnd = rand(1000, 9999);
        return $string.'-'.$rnd;
    }
}
