<?php

namespace Imbc\TankopediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GunType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('xp')
            ->add('cost')
            ->add('weight')
            ->add('ammoCapacity')
            ->add('damageAP')
            ->add('damageAPCR')
            ->add('damageHE')
            ->add('penetrationAP')
            ->add('penetrationAPCR')
            ->add('penetrationHE')
            ->add('shell')
            ->add('rateOfFire')
            ->add('accuratie')
            ->add('aimTimeMin')
            ->add('aimTimeMax')
            ->add('elevationMin')
            ->add('elevationMax')
            ->add('requiresTurret')
            ->add('tier')
            ->add('nationality')
            ->add('tanks')
            ->add('turret')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imbc\TankopediaBundle\Entity\Gun'
        ));
    }

    public function getName()
    {
        return 'imbc_tankopediabundle_guntype';
    }
}
