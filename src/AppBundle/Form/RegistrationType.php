<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name_user', TextType::class, array('label'=>'Nombre y Apellido'))->add('dni_user', TextType::class, array('label'=>'Documento'))->add('fnac_user', DateType::class, array('label'=>'Fecha de Nacimiento'))->add('dire_user', TextType::class, array('label'=>'Dirección'))->add('phon_user', NumberType::class, array('label'=>'Teléfono'));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}