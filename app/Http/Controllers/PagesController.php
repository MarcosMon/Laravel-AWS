<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
	//Llama al archivo welcome para que muestre su contenido
    public function inicio(){
		return view('welcome');
	}
	//Array de las ofertas, la cual es pintada en el archivo ofertas
	public function ofertas($nombre = null){
	
		$listaOfertas = ['Descuentos', 'Bebidas Gratuitas', 'Sorteo de estancia gratuita'];
	
	return view('ofertas',compact('listaOfertas','nombre'));
	}

	
}