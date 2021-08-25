<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModeloPrincipal');
		
	}

	public function Alumnos()
	{
		$datos['usuario']=$this->ModeloPrincipal->mostrar();
		$this->load->view('platilla');
		$this->load->view('AdminStud',$datos);
		$this->load->view('footer');
	}

	public function Profesores()
	{
		$datos2['profe']=$this->ModeloPrincipal->mostrar2();
		$this->load->view('platilla');
		$this->load->view('AdminProfe',$datos2);
		$this->load->view('footer');
	}


	public function Guardar(){
		$nombre_a=$this->input->post('nombreR');
		$apellidos_a=$this->input->post('apellidoR');
		$cuatrimestre_a=$this->input->post('cuatrimestreR');
		$contraseña_a=$this->input->post('claveR');
		$carrera_a=$this->input->post('Carrera');

		$dato=['Matricula'=>null,
		'Nombre'=>$nombre_a,
		'Apellido'=>$apellidos_a,
		'Cuatrimestre'=>$cuatrimestre_a,
		'Contraseña'=>$contraseña_a,
		'Carrera'=>$carrera_a,];
		

		$this->ModeloPrincipal->insertar($nombre_a,$apellidos_a,$cuatrimestre_a,$contraseña_a,$carrera_a);
		redirect('Principal/Alumnos');
	}

	public function GuardarP(){
		$nombre_p=$this->input->post('nombreR');
		$contraseña_p=$this->input->post('contraseñaR');
		$titulo_p=$this->input->post('tituloR');
		$edad_p=$this->input->post('edadR');

		

		$this->ModeloPrincipal->insertarP($nombre_p,$contraseña_p,$titulo_p,$edad_p);
		redirect('Principal/Profesores');
	}

	public function GuardarR(){
		$matricula=$this->input->post('matricula');
		$asesor=$this->input->post('Asesor');
		$moduloR=$this->input->post('modulo');
		$actividadR=$this->input->post('actividad');
		$dia=$this->input->post('Dia');
		$hora=$this->input->post('Hora');

		#echo $matricula,$asesor,$moduloR,$actividadR,$dia,$hora;


		$this->ModeloPrincipal->insertarR($matricula,$asesor,$moduloR,$actividadR,$dia,$hora);
		redirect('Principal/Reservations');
	}

	public function editar($matricula){
		$dato['personaVista']=$this->ModeloPrincipal->buscar_alumno($matricula);
		$this->load->view("editar",$dato);
	}

	#$GLOBALS['matricula1']=0;
	public function loginA(){
		$v1=$_POST['usuario'];
		$v2=$_POST['clave'];
		
		$datos=$this->ModeloPrincipal->loginAl($v1);
		#echo gettype($datos);
		

		$login=$this->ModeloPrincipal->validar($datos,$v2);

		
		if ($login==1) {
			$matricula=$v1;
		$this->load->view('platilla');
		$this->load->view('StudMod',array('matricula'=>$matricula));
		$this->load->view('footer');

		}else{
		$this->load->view('platilla');
		$this->load->view('LoginAlum');
		$this->load->view('footer');
			
		}
		#echo $prueba->contraseña;
		#$usuario as $p
		#echo $p->contraseña,$v2;
	
		#if (strcmp($contraseña, $v2) == 0) {
		#$this->load->view('platilla');
		#$this->load->view('StudMod');
		#$this->load->view('footer');
		#}else{
		#$this->load->view('platilla');
		#$this->load->view('LoginAlum');
		#$this->load->view('footer');
		
		#}
		#$datos['usuario']=$this->ModeloPrincipal->loginAl($v1);
		
		#$this->load->view('platilla');
		
		#$this->load->view('footer');
	}
	public function loginP(){
		$v1=$_POST['usuario'];
		$v2=$_POST['clave'];

		$datos=$this->ModeloPrincipal->loginP($v1);
		$login=$this->ModeloPrincipal->validar($datos,$v2);

		if ($login==1) {
		
		$this->load->view('platilla');
		$this->load->view('AdminMod');
		$this->load->view('footer');

		}else{
		$this->load->view('platilla');
		$this->load->view('LoginAdmin');
		$this->load->view('footer');
			
		}
	}



	public function actualizar (){
		$matricula=$this->input->post('Matricula');
		$nombre_alumno=$this->input->post('nombre');
		$apellidos_alumno=$this->input->post('apellidos');
		$cuatrimestre_alumno=$this->input->post('cuatrimestre');
		$constraseña_alumno=$this->input->post('Clave');
		$carrera_alumno=$this->input->post('Carrera');
		$dato=['matricula'=>$matricula,
		'nombre'=>$nombre_alumno,
		'apellidos'=>$apellidos_alumno,
		'cuatrimestre'=>$cuatrimestre_alumno,
		'contraseña'=>$constraseña_alumno,
		'idcarrera'=>$carrera_alumno,
		];
	$this->ModeloPrincipal->actualizar($matricula,$dato);
	redirect('Principal/Alumnos');
	}

	public function editarP($idasesor){
		$dato['personaVista']=$this->ModeloPrincipal->buscar_profe($idasesor);
		$this->load->view("editarP",$dato);
	}

	public function actualizarP (){
		$idasesor=$this->input->post('Idasesor');
		$nombre_prof=$this->input->post('nombre');
		$titulo_prof=$this->input->post('titulo');
		$edad_prof=$this->input->post('edad');
		$dato=['idasesor'=>$idasesor,
		'nombre'=>$nombre_prof,
		'titulo'=>$titulo_prof,
		'edad'=>$edad_prof,
		];
	$this->ModeloPrincipal->actualizarP($idasesor,$dato);
	redirect('Principal/Profesores');
	}

	public function eliminar($matricula){
	$this->ModeloPrincipal->eliminar($matricula);
	redirect('Principal/Alumnos');
	}

	public function eliminarP($idasesor){
	$this->ModeloPrincipal->eliminarP($idasesor);
	redirect('Principal/Profesores');
	}

	public function eliminarR($idreservacion){
	$this->ModeloPrincipal->eliminarR($idreservacion);
	redirect('Principal/Reservations');
	}


	public function index()
	{

		$this->load->view('platilla');
		$this->load->view('LoginAdmin');
		$this->load->view('footer');
	}

	public function AdminMod()
	{
		$this->load->view('platilla');
		$this->load->view('AdminMod');
		$this->load->view('footer');
	}

	public function StudMod()
	{
		$this->load->view('platilla');
		$this->load->view('StudMod');
		$this->load->view('footer');
	}

	public function AdminCursos()
	{
		$this->load->view('platilla');
		$this->load->view('AdminCursos');
		$this->load->view('footer');
	}

	public function AdminProfe()
	{
		$this->load->view('platilla');
		$this->load->view('AdminProfe');
		$this->load->view('footer');
	}

	public function Listening()
	{
		
		$this->load->view('platilla');
		$this->load->view('Listening');
		$this->load->view('footer');
	}

	public function LoginAlum()
	{
		$this->load->view('platilla');
		$this->load->view('LoginAlum');
		$this->load->view('footer');
	}

	public function Reading()
	{
		$modulo=4;	
		$actividad=9;
		$this->load->view('platilla');
		$this->load->view('Reading');
		$this->load->view('Form-Res',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('footer');
	}

	public function ResAudioBook()
	{
		$modulo=2;
		$actividad=1;
		$this->load->view('platilla');
		$this->load->view('Res-AudioBook');
		$this->load->view('Form-Res',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('footer');
	}

	public function ResCC()
	{
		$modulo=3;
		$actividad=2;
		$this->load->view('platilla');
		$this->load->view('Res-CC');
		$this->load->view('Form-Res',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('footer');
	}

	public function ResCinema()
	{
		$modulo=2;
		$actividad=3;
		$this->load->view('platilla');
		$this->load->view('Res-Cinema',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('Form-Res');
		$this->load->view('footer');
	}

	public function ResKaraoke()
	{
		$modulo=3;
		$actividad=4;
		$this->load->view('platilla');
		$this->load->view('Res-Karaoke',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('Form-Res');
		$this->load->view('footer');
	}

	public function ResSeries()
	{
		$modulo=2;
		$actividad=5;
		$this->load->view('platilla');
		$this->load->view('Res-Series',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('Form-Res');
		$this->load->view('footer');
	}

	public function ResSpeaking()
	{
		$modulo=2;
		$actividad=6;
		$this->load->view('platilla');
		$this->load->view('Res-Speaking',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('Form-Res');
		$this->load->view('footer');
	}

	public function ResSpeaking2()
	{
		$modulo=3;
		$this->load->view('platilla');
		$this->load->view('Res-Speaking',array('modulo'=>$modulo));
		$this->load->view('Form-Res');
		$this->load->view('footer');
	}

	public function ResTandem()
	{
		$modulo=3;
		$actividad=7;
		$this->load->view('platilla');
		$this->load->view('Res-Tandem',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('Form-Res');
		$this->load->view('footer');
	}

	public function ReservationReal()
	{
		$this->load->view('platilla');
		$this->load->view('ReservationReal');
		$this->load->view('footer');
	}

	public function Reservations()
	{
		$datos3['reservation']=$this->ModeloPrincipal->mostrar3();
		$this->load->view('platilla');
		$this->load->view('Reservations',$datos3);
		$this->load->view('footer');
	}

	public function Speaking()
	{
		$this->load->view('platilla');
		$this->load->view('Speaking');
		$this->load->view('footer');
	}

	public function Writing()
	{
		$modulo=1;
		$actividad=8;
		#$matricula=$GLOBALS['matricula1'];
	
		$this->load->view('platilla');
		$this->load->view('Writing');
		$this->load->view('Form-Res',array('modulo'=>$modulo,'actividad'=>$actividad));
		$this->load->view('footer');
	}

		public function RegistroAlum()
	{
		$this->load->view('platilla');
		$this->load->view('RegistroAlum');
		$this->load->view('footer');
	}

		public function RegistroProfe()
	{
		$this->load->view('platilla');
		$this->load->view('RegistroProfe');
		$this->load->view('footer');
	}












}