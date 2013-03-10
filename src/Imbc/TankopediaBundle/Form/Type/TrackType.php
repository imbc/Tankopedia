<?php

namespace Imbc\TankopediaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('xp')
            ->add('cost')
            ->add('weight')
            ->add('loadLimit')
            ->add('traverseSpeed')
            ->add('tier')
            ->add('nationality')
            ->add('tanks')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Track'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_tracktype';
    }
}
