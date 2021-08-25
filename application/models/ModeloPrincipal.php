<?php 
class ModeloPrincipal extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Mostrar()
	{
	$consulta = $this->db->query("Select * from alumno2");
	return $consulta->result();	
	}

	public function Mostrar2()
	{
	$consulta2 = $this->db->query("Select * from asesor");
	return $consulta2->result();	
	}

	public function Mostrar3()
	{
	$consulta3 = $this->db->query("Select * from reservacion2");
	return $consulta3->result();	
	}

	public function guardar($dato){
	$this->db->insert('Usuario',$dato);
}

	public function buscar_alumno($matricula){
	$this->db->where('matricula',$matricula);
	$consulta=$this->db->get('alumno');
	return $consulta->row();
	}

	public function buscar_profe($idasesor){
	$this->db->where('idasesor',$idasesor);
	$consulta=$this->db->get('asesor');
	return $consulta->row();
	}

	public function actualizar($matricula,$dato){
	$this->db->where('matricula',$matricula);
	$consulta=$this->db->update('alumno',$dato);
	}

	public function actualizarP($idasesor,$dato){
	$this->db->where('idasesor',$idasesor);
	$consulta=$this->db->update('asesor',$dato);
	}

	public function insertar($nombre,$apellidos,$cuatrimestre,$contraseña,$carrera){
	$this->db->query("INSERT INTO alumno VALUES (NULL,'$nombre','$apellidos','$cuatrimestre','$contraseña',$carrera)");

	}

	public function insertarP($nombre,$contraseña,$titulo,$edad){
	$this->db->query("INSERT INTO asesor VALUES (NULL,'$nombre','$contraseña','$titulo','$edad')");

	}

	public function insertarR($matricula,$asesor,$modulo,$actividad,$dia,$hora){
	$this->db->query("INSERT INTO reservacion VALUES (NULL,'$matricula','$asesor','$modulo','$actividad','$dia','$hora')");

	}

	public function eliminar($matricula){
		$this->db->where('matricula',$matricula);
		$this->db->delete('alumno');

	}

	public function eliminarP($idasesor){
		$this->db->where('idasesor',$idasesor);
		$this->db->delete('asesor');

	}

	public function eliminarR($idreservacion){
		$this->db->where('idreservacion',$idreservacion);
		$this->db->delete('reservacion');

	}

	public function loginAl($usuario)
	{

	$consulta = $this->db->query("Select contraseña from alumno WHERE matricula = $usuario");
	
	
	return $consulta->result();
	}

	public function loginP($usuario)
	{

	$consulta = $this->db->query("Select contraseña from asesor WHERE idasesor = $usuario");
	
	
	return $consulta->result();
	}

	public function validar($datos,$v2){
		foreach($datos as $p):
        
       
        
        #print("<td>".$p->contraseña);
        #echo gettype($p->contraseña);

        $otra=$v2;
        if(strcmp($p->contraseña, $otra) == 0)
        {

          return 1;
        }
        else
        {
          return 0;
        }
       
        
      endforeach;
	}



}

 ?>