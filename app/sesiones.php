<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sesiones extends Model
{
	protected $table = 'sesiones';
	public $timestamps = false;
	private $nombre;
	private $email;

	protected $fillable = [
        'id_user', 'nombre', 'email',
    ];

    public function getNombre(){
    	return $this->nombre;
    }
    public function setNombre($n){
    	$this->nombre=$n;
    }
}
