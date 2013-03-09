<?php

namespace Imbc\TankopediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TurretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('xp')
            ->add('cost')
            ->add('weight')
            ->add('armorFront')
            ->add('armorSide')
            ->add('armorRear')
            ->add('traverseSpeed')
            ->add('viewRange')
            ->add('tier')
            ->add('nationality')
            ->add('tanks')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Turret'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_turrettype';
    }
}
