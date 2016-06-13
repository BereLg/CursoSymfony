<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use stObject;
class DefaultController extends Controller{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request){
		// replace this example code with whatever you need
		return $this->render('default/index.html.twig', [
			'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
			]);
	}
	
	/**
	 * @Route("/ayuda", name="ayuda")
	 */
	public function ayudaAction(){
		return $this->render('default/ayuda.html.twig');
	}
	
	/**
	 * @Route("/perfil", name="perfil")
	 */
	public function perfilAction(){
		$user = new stdObject();
		$user->nombre = "Nick";
		$user->apellido = "Doe";
		$user->edad = 20;
		return $this->render('default/perfil.html.twig',array('user'=>$user));
	}
	
	/**
	 * @Route("/reportes", name="reportes")
	 */
	public function reportesAction(){
		return $this->render('default/reportes.html.twig');
	}
}