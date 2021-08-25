<?php 

	class Principal extends CI_Controller {
	
	public function test_Guardar(){
		$nombre_a='Juan';
		$apellidos_a='Perez';
		$cuatrimestre_a= 4 ;
		$contraseña_a= 'pruebas1';
		$carrera_a= 1;

		$dato=['Matricula'=>null,
		'Nombre'=>$nombre_a,
		'Apellido'=>$apellidos_a,
		'Cuatrimestre'=>$cuatrimestre_a,
		'Contraseña'=>$contraseña_a,
		'Carrera'=>$carrera_a,];
		

		$this->assertEquals('Juan',$nombre_a);
		$this->assertEquals('Perez',$apellido_a);
		$this->assertEquals(4,$cuatrimestre_a);
		$this->assertEquals('pruebnas1',$contraseña_a);
		$this->assertEquals(1,$carrera_a);
	}
	

	public function test_GuardarP(){
		$nombre_p='Carlos';
		$contraseña_p='upp2020';
		$titulo_p='LELI';
		$edad_p= 23 ;

		$this->assertEquals('Juan',$nombre_p);
		$this->assertEquals('upp2020',$contraseña_p);
		$this->assertEquals('LELI',$titulo_p);
		$this->assertEquals(23,$edad_p);

	}

	public function test_GuardarR(){
		$matricula='1831116097';
		$asesor='Pedro Picapiedra';
		$moduloR=1;
		$actividadR= 8 ;
		$dia='Lunes';
		$hora= '08:00';

		
		$this->assertEquals('1831116680',$matricula);
		$this->assertEquals('Pedro Picapiedra',$asesor);
		$this->assertEquals(1,$moduloR);
		$this->assertEquals(8,$actividadR);
		$this->assertEquals('Lunes',$dia);
		$this->assertEquals('08:00',$hora);		
	}

	public function test_editar($matricula){

		$matricula='1831116089';

		$this->assertEquals('1831116089',$matricula);

		
	}

	
	public function test_loginP(){
		$usuario = 'Pancho Wuacala';
		$clave = '123456';

		$this->assertEquals('Pancho Wuacala',$usuario);
		$this->assertEquals('123456',$clave);
	}



	public function test_actualizar (){
		$matricula='1831114056';
		$nombre_alumno='Arturo';
		$apellidos_alumno='Alan';
		$cuatrimestre_alumno= 6 ;
		$constraseña_alumno='987654';
		$carrera_alumno=5;
		$dato=['matricula'=>$matricula,
		'nombre'=>$nombre_alumno,
		'apellidos'=>$apellidos_alumno,
		'cuatrimestre'=>$cuatrimestre_alumno,
		'contraseña'=>$constraseña_alumno,
		'idcarrera'=>$carrera_alumno,
		];
		
		$this->assertEquals('1831114056',$matricula);
		$this->assertEquals('Arturo',$nombre_alumno);
		$this->assertEquals('Alan',$apellidos_alumno);
		$this->assertEquals(6,$cuatrimeste_alumno);
		$this->assertEquals('987654',$constraseña_alumno;);
		$this->assertEquals(5,$carrera_alumno);	

	}

	public function test_actualizarP (){
		$idasesor='111');
		$nombre_prof='Rodolfo Reno';
		$titulo_prof='Doctor';
		$edad_prof= 25;
		$dato=['idasesor'=>$idasesor,
		'nombre'=>$nombre_prof,
		'titulo'=>$titulo_prof,
		'edad'=>$edad_prof,
		];
		
		$this->assertEquals('111',$idasesor);
		$this->assertEquals('Rodolfo Reno',$nombre_prof);
		$this->assertEquals('Doctor',$titulo_prof);
		$this->assertEquals(25,$edad_prof);

	}

	public function test_eliminar($matricula){

		$prueba = '183116097'
		eliminar($prueba);
	
	}

	public function test_eliminarP($idasesor){
	$prueba = '111'
		eliminar($prueba);
	}

	public function test_eliminarR($idreservacion){
	$prueba = '18'
		eliminar($prueba);
	}

}
