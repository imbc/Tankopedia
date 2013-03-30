<?php

namespace Imbc\TankopediaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TurretType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'name', 'text', array(
            'label' => 'Name',
        ));
        $builder->add( 'cost', 'number', array(
            'label' => 'Cost',
        ));
        $builder->add( 'weight', 'number', array(
            'label' => 'Weight',
        ));
        $builder->add( 'armorFront', 'number', array(
            'label' => 'Weight',
        ));
        $builder->add( 'armorSide', 'number', array(
            'label' => 'Weight',
        ));
        $builder->add( 'armorRear', 'number', array(
            'label' => 'Weight',
        ));
        $builder->add( 'traverseSpeed', 'number', array(
            'label' => 'Weight',
        ));
        $builder->add( 'viewRange', 'number', array(
            'label' => 'Weight',
        ));
        $builder->add( 'tier', 'entity', array(
            'empty_data'    => null,
            'empty_value'   => '(Choose a Tier)',
            'required'      => true,
            'class'         => 'ImbcTankopediaBundle:Tier',
            'property'      => 'name',
            'label'         => 'Tier',
//            'expanded'      => true,
        ));
        $builder->add( 'nationality', 'entity', array(
            'empty_data'    => null,
            'empty_value'   => '(Choose a Nationality)',
            'required'      => true,
            'class'         => 'ImbcTankopediaBundle:Nationality',
            'property'      => 'name',
            'label'         => 'Nationality',
//            'expanded'      => true,
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
        $builder->add( 'guns', 'entity', array(
//            'empty_data'    => null,
//            'empty_value'   => '(Choose one or more Tanks)',
            'required'      => false,
            'class'         => 'ImbcTankopediaBundle:Turret',
            'property'      => 'name',
            'label'         => 'Turret Compatible',
            'multiple'      => true,
//            'group_by'      => 'type'
//            'expanded'      => true,
        ));
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Turret'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_turrettype';
    }
}
