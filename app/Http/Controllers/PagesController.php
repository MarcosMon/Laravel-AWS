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

	//Asi tendria que usarse la funcion random, pero no logré coordinarla.
	// public function numeroRandom(){
	// $random_string = rand(1,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . chr(rand(65,90))
	// . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90);

	// return $random_string;
	// }

}
