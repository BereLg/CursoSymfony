<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AlumnoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('sexo',ChoiceType::class, array(
					'placeholder' => 'Sexo',
					'choices'  => array(
					'Mujer' => 'M',
					'Varón' => 'V',),))
            ->add('fechaNacimiento', BirthdayType::class, array(
				'placeholder' => 'Fecha de Nacimiento',
				'widget' => 'single_text',
				))
            ->add('curso',null,array(
					'placeholder' => 'Curso'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Alumno'
        ));
    }
}
