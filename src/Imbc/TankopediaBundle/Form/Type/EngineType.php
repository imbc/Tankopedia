<?php

namespace Imbc\TankopediaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EngineType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'name', 'text', array(
            'label' => 'Name',
        ));
        $builder->add( 'xp' );
        $builder->add( 'cost' );
        $builder->add( 'weight' );
        $builder->add( 'power' );
        $builder->add( 'fireChance', 'percent', array(
            'label' => 'Change of Fire',
            'type' => 'integer',
        ));
        $builder->add( 'fuelType', 'choice', array(
            'choices'   => array(
                'Gazoline'   => 'Gazoline' ,
                'Diesel' => 'Diesel',
            ),
            'label' => 'Fuel Type',
            'multiple'  => false,
            'empty_value' => 'Pick Fuel Type',
            'empty_data'  => null
        ));
        $builder->add( 'tier' );
        $builder->add( 'nationality' );
        $builder->add( 'tanks' );
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Engine'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_enginetype';
    }
}
