<?php

namespace Imbc\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder->add( 'username' );
        $builder->add( 'usernameCanonical' );
        $builder->add( 'email' );
        $builder->add( 'emailCanonical' );
        $builder->add( 'enabled' );
        $builder->add( 'salt' );
        $builder->add( 'password' );
        $builder->add( 'lastLogin' );
        $builder->add( 'locked' );
        $builder->add( 'expired' );
        $builder->add( 'expiresAt' );
        $builder->add( 'confirmationToken' );
        $builder->add( 'passwordRequestedAt' );
        $builder->add( 'roles' );
        $builder->add( 'credentialsExpired' );
        $builder->add( 'credentialsExpireAt' );
    }

    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Imbc\UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'imbc_userbundle_usertype';
    }
}
