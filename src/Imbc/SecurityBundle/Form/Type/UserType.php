<?php

namespace Imbc\SecurityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'username' );
        $builder->add( 'roles' ); // need to reflect the implementation
    }
    public function getName()
    {
        return 'user';
    }

    public function getDefaultOptions( array $options )
    {
        return array(
            'data_class' => 'Imbc\SecurityBundle\Entity\User',
        );
    }
}