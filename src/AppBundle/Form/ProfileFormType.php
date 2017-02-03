<?php
// src/AppBundle/Form/UserType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name_user', TextType::class, array('label'=>'Nombre y Apellido'))->add('dni_user', TextType::class, array('label'=>'Documento'))->add('fnac_user', DateType::class, array('label'=>'Fecha de Nacimiento'))->add('dire_user', TextType::class, array('label'=>'Dirección'))->add('phon_user', NumberType::class, array('label'=>'Teléfono'));
    }

    public function getParent()
    {
        return 'fos_user_profile';

    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}