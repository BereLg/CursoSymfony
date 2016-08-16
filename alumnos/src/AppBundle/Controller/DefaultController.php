<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;
use AppBundle\Entity\Alumno;
use AppBundle\Form\UsuarioType;

class DefaultController extends Controller{	
	/**
	 * @Route("/", name="perfil")
	 */
	public function perfilAction(){
		return $this->render('default/perfil.html.twig');
	}
	
	/**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/user/{id}/edit", name="perfil_edit")
     * 
     */
	public function editarPerfil(Request $request){
		$user = $this->getUser();
		$editForm = $this->createForm(UsuarioType::class, $user);
        $editForm->handleRequest($request);
		if ($editForm->isSubmitted() && $editForm->isValid()) {
			$userManager = $this->get('fos_user.user_manager');
			$userManager->updateUser($usuario,true);
          return $this->redirectToRoute('perfil');
        }
	return $this->render('default/edit.html.twig', array(
            'form' => $editForm->createView()
        ));
	}
	
	/**
	 * @Route("/reportes", name="reportes")
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function reportesAction(){
		$em = $this->getDoctrine()->getManager();
        $alumnos = $em->getRepository('AppBundle:Curso')->findAlumnosPorCursoPorSexo(1,"M");
		return $this->render('default/reportes.html.twig',array('alumnos'=>$alumnos));
	}
}