<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;
use AppBundle\Entity\Alumno;

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
	 * @Route("/perfil", name="perfil")
	 */
	public function perfilAction(){
		//Código sólo a modo de ejemplo.
		$curso = new Curso("6to","2da",2010);
		$nac = new \DateTime('1993-04-28');
		$alumno = new Alumno("Berenice Lencina",$nac,"Mujer",$curso);
		return $this->render('default/perfil.html.twig',array('user'=>$alumno));
	}
	
	/**
	 * @Route("/reportes", name="reportes")
	 */
	public function reportesAction(){
		//Código sólo a modo de ejemplo
		$em = $this->getDoctrine()->getManager();
        $alumnos = $em->getRepository('AppBundle:Curso')->findAlumnosPorCursoPorSexo(1,"M");
		return $this->render('default/reportes.html.twig',array('alumnos'=>$alumnos));
	}
}