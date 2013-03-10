<?php

namespace Imbc\TankopediaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TankType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'name', 'text', array(
            'label' => 'Name',
        ));
        $builder->add( 'premium', 'checkbox', array(
            'label' => 'Is this a Premium Tank?',
            'required' => false,
        ));
        $builder->add( 'reward', 'checkbox', array(
            'label' => 'Is this a Gift/Reward Tank?',
            'required' => false,
        ));
//        $builder->add( 'type' );
        $builder->add( 'type', 'entity', array(
            'empty_data'    => null,
            'empty_value'   => '(Choose a Type)',
            'required'      => true,
            'class'         => 'ImbcTankopediaBundle:Type',
            'property'      => 'name',
            'label'         => 'Type',
        ));
        $builder->add( 'tier', 'entity', array(
            'empty_data'    => null,
            'empty_value'   => '(Choose a Tier)',
            'required'      => true,
            'class'         => 'ImbcTankopediaBundle:Tier',
            'property'      => 'value',
            'label'         => 'Tier',
        ));
        $builder->add( 'nationality', 'entity', array(
            'empty_data'    => null,
            'empty_value'   => '(Choose a Nationality)',
            'required'      => true,
            'class'         => 'ImbcTankopediaBundle:Nationality',
            'property'      => 'name',
            'label'         => 'Nationality',
        ));
        $builder->add( 'parents' );
        $builder->add( 'children' );
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Tank'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_tanktype';
    }
}
