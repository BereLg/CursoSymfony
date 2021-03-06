<?php

namespace AppBundle\Repository;

/**
 * CursoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CursoRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAlumnosPorCursoPorSexo($curso,$sexo){
		$em = $this->getEntityManager();
		$dql = "SELECT a FROM AppBundle:Alumno a WHERE a.sexo LIKE :sexo ESCAPE '%' AND a.curso = :idCurso";
		$consulta = $em->createQuery($dql)
						->setParameter('idCurso', $curso)
						->setParameter('sexo', $sexo);
		$result = $consulta->getResult();
		return $result;
	}
}
