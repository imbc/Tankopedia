<?php

namespace Imbc\TankopediaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TankClassType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add( 'name', 'text', array(
            'label' => 'Name',
        ));
        $builder->add( 'tanks', 'entity', array(
//            'empty_data'    => null,
//            'empty_value'   => '(Choose one or more Tanks)',
            'required'      => false,
            'class'         => 'ImbcTankopediaBundle:Tank',
            'property'      => 'name',
            'label'         => 'Tank Compatible',
            'multiple'      => true,
//            'group_by'      => 'type'
//            'expanded'      => true,
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\TankClass'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_classtype';
    }
}
