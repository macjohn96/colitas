<?php namespace App\Controllers;
use App\Models\FotosModel;
use CodeIgniter\RESTful\ResourceController;

class RestFotos extends ResourceController{
    protected $modelName = 'App\Models\FotosModel';
    protected $format = 'json';

    private function genericResponse($data, $msj, $code){
		if ($code == 200) {
			return $this->respond(array(
				"data" => $data,
				"code" => $code
		)); //, 404, "No hay nada"
		} else {
			return $this->respond(array(
			"msj" => $msj,
			"code" => $code
			));
		}
	}
	
	private function url($segmento){
		if(isset($_SERVER['HTTPS'])){
			$protocol = ($_SERVER['HTTPS'] != "off") ? "https" : "http";
 		} else{
			$protocol = 'http';
		}
 		return $protocol . "://" . $_SERVER['HTTP_HOST'] . $segmento;
 	}
 	
 	private function map($data){
 		$fotos = array();
 		foreach ($data as $row){
 			$foto = array(
 				"id" => $row['id'],
 				"nombre" => $row['nombre'],
                "especie" => $row['especie'],
 				"protectora" => $row['protectora'],
                "imagen" => $row['imagen'],
 				"telefono" => $row['telefono']
 			);
 			array_push($fotos, $foto);
 		}
 		return $fotos;
 	}
 	
 	 public function nombre($nombre = null){
        if ($nombre === null) {
            $data = $this->model->getFotosNombreAll();
            $fotos = $this->map($data);
            return $this->genericResponse($fotos, null, 200);
        } else {
            $data = $this->model->getFotosNombre($nombre);
            $fotos = $this->map($data);
            return $this->genericResponse($fotos, null, 200);
        }
	}
}