<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReservaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idCanch',TextType::class, array('label' => 'Nombre Cancha', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')))
                ->add('fechaReserva',DateType::class, array('label' => 'Fecha a Reservar', 'widget' => 'choice', 'attr'=> array('class'=> 'col-sm-8 form-control'), 'label_attr' => array('class'=> 'col-sm-4 control-label')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Reserva'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reserva';
    }


}
