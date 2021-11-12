<?php
namespace App\Http\Solicitud;
use Illuminate\Foundation\Http\FormRequest; 
class GuardarProducto extends FormRequest{

    public function authorize(){
        return true; 
    }
    public function rules(){
        return [
            "nombre"=> "required|max:255"
        ];
    }
}
