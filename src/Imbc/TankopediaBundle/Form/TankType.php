<?php

namespace Imbc\TankopediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TankType extends AbstractType
{

    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'name' );
        $builder->add( 'premium', 'checkbox', array(
            'label' => 'Is this a Premium Tank?',
            'required' => false,
        ));
        $builder->add( 'reward', 'checkbox', array(
            'label' => 'Is this a Gift/Reward Tank?',
            'required' => false,
        ));
        $builder->add( 'type' );
        $builder->add( 'tier' );
        $builder->add( 'nationality' );
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Tank'
        ) );
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_tanktype';
    }
}
