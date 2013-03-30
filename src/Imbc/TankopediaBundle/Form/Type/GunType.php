<?php

namespace Imbc\TankopediaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GunType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'name', 'text', array(
                    'label' => 'Name',
        ));
        $builder->add( 'cost' );
        $builder->add( 'weight' );
        $builder->add( 'ammoCapacity', 'number', array(
                    'label' => 'Ammo Capacity',
        ));
        $builder->add( 'damageAP', 'number', array(
                    'label' => 'AP Damage',
        ));
        $builder->add( 'damageAPCR', 'number', array(
                    'label' => 'APCR  Damage',
        ));
        $builder->add( 'damageHE', 'number', array(
                    'label' => 'HE  Damage',
        ));
        $builder->add( 'penetrationAP', 'number', array(
                    'label' => 'AP Penetration',
        ));
        $builder->add( 'penetrationAPCR', 'number', array(
                    'label' => 'APCR Penetration',
        ));
        $builder->add( 'penetrationHE', 'number', array(
                    'label' => 'HE Penetration',
        ));
        $builder->add( 'shell' );
        $builder->add( 'rateOfFire', 'number', array(
                    'label' => 'Rate for Fire',
        ));
        $builder->add( 'accuratie', 'number', array(
                    'label' => 'Accuratie',
        ));
        $builder->add( 'aimTimeMin', 'number', array(
                    'label' => 'Aim Time (min)',
        ));
        $builder->add( 'aimTimeMax', 'number', array(
                    'label' => 'Aim Time (max)',
        ));
        $builder->add( 'elevationMin', 'number', array(
                    'label' => 'Elevation (min)',
        ));
        $builder->add( 'elevationMax', 'number', array(
                    'label' => 'Elevation (max)',
        ));
        $builder->add( 'requiresTurret', 'checkbox', array(
                    'label' => 'Requires Turret?',
        ));
        $builder->add( 'turret' );
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
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Gun'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_guntype';
    }
}
