<?php namespace App\Controllers;

use App\Models\ModeloAnimales;


class RegistroControlador extends BaseController{
    
    public function index(){
		return view('vistaRegistro');
	}

	public function registrar(){

		//1. Recibir los datos desde la vista
		$nameanimal=$this->request->getPost("nameanimal");
		$ageanimal=$this->request->getPost("ageanimal");
		$time=$this->request->getPost("time");
		$foodanimal=$this->request->getPost("foodanimal");
		$description=$this->request->getPost("description");
		$typeanimal=$this->request->getPost("typeanimal");
		$photoanimal=$this->request->getPost("photoanimal");

		//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)
		$datosEnvio=array(
			"nameanimal"=>$nameanimal,
			"ageanimal"=>$ageanimal,
			"time"=>$time,
			"foodanimal"=>$foodanimal,
			"description"=>$description,
			"typeanimal"=>$typeanimal,
			"photoanimal"=>$photoanimal
		);

		//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD
		$modeloAnimal= new ModeloAnimales();

		//4. Utilizar el modelo para insertar los datos
		try{
			
			$modeloAnimal->insert($datosEnvio);
			$mensaje="Registro agregado con éxito";
			return (redirect()->to(base_url("public/"))->with('mensaje',$mensaje));



		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

	public function buscar(){
		
		//1. Crear un objeto del Modelo
		$modeloAnimal= new ModeloAnimales();

		//2. Ejecutar la busqueda
		try{

			//2.1 Ejecutar findALL
			$datosConsultados=$modeloAnimal->findAll();

			//2.2 Preparar los datos para la vista
			$datosParaVista=array("animales"=>$datosConsultados);

			//2.3 LLamar a la vista que va a mostrar los datos
			return view('vistaListado',$datosParaVista);


		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

	public function eliminar($id){

		//1. Crear un objeto del modelo
		$modeloAnimal= new ModeloAnimales();

		//2. Ejecutar la funcion delete del modelo identificando el registro a eliminar
		try{

			$modeloAnimal->where('id',$id)->delete();
			$mensaje="Registro eliminado con éxito";
			return (redirect()->to(base_url("public/"))->with('mensaje',$mensaje));


		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

	public function editar($id){

		//1. Recibir los datos desde la vista
		$nombre=$this->request->getPost("nombreEditar");
		$description=$this->request->getPost("descripcionEditar");
		$food =$this->request->getPost("foodEditar");
		$photo =$this->request->getPost("photoEditar");

		

		//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)
		$datosEnvio=array(
			"nameanimal"=>$nombre,
			"description"=>$description,
			"foodanimal" => $food,
			"photoanimal" => $photo
		);

		//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD
		$modeloAnimal= new ModeloAnimales();

		//4. Ejecutar el metodo update del modelo
		try{

			$modeloAnimal->update($id,$datosEnvio);
			$mensaje="Registro actualizado con éxito";
			return (redirect()->to(base_url("public/"))->with('mensaje',$mensaje));

			
		}catch(\Exception $error){

			echo($error->getMessage());

		}
		

		

	}

	//--------------------------------------------------------------------

}
