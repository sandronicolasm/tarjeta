<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampeonatoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nameCamp',TextType::class, array('label' => 'Nombre', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')))
                ->add('fechInic',DateType::class, array('label' => 'Fecha Finalización', 'widget' => 'choice', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')))
                ->add('fechFina',DateType::class, array('label' => 'Fecha Finalización', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')))
                ->add('precInsc',TextType::class, array('label' => 'Precio Inscripción', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')))
                ->add('descCamp',TextType::class, array('label' => 'Descripción', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')))
                ->add('idComp',TextType::class, array('label' => 'Complejo Perteneciente', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Campeonato'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_campeonato';
    }


}
