<?php namespace App\Controllers;


class HomeControlador extends BaseController{
    
    public function index(){
		return view('vistaHome');
    }
}