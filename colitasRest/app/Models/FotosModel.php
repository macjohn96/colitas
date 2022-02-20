<?php namespace App\Models;
use CodeIgniter\Model;

class FotosModel extends Model {
    protected $table = 'fotos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nombre', 'especie', 'protectora', 'imagen', 'telefono'];
    
    public function getFotosNombreAll(){
        $query = $this->query("SELECT * from fotos");
        return $query->getResult('array');
    }

    public function getFotosNombre($nombre){
        $sql = "SELECT * FROM fotos where nombre=:nombre:";
        $query = $this->query($sql, [
            'nombre' => $nombre,
        ]);
        return $query->getResult('array');
    }
}