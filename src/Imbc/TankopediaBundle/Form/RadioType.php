<?php

namespace Imbc\TankopediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RadioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('xp')
            ->add('cost')
            ->add('weight')
            ->add('signalRange')
            ->add('tier')
            ->add('nationality')
            ->add('tank')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Radio'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_radiotype';
    }
}
