<?php

namespace Imbc\SecurityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RoleType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'id', 'hidden', array(
            'mapped' => false
        ));
        $builder->add( 'name' );
        $builder->add( 'description' );
        $builder->add( 'parent' );
    }

    public function getName()
    {
        return 'role';
    }

    public function getDefaultOptions( array $options )
    {
        return array(
            'data_class' => 'Imbc\SecurityBundle\Entity\Role',
        );
    }
}