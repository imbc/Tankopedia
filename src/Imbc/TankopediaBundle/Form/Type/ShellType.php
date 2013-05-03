<?php

namespace Imbc\TankopediaBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShellType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
				->add('name', 'text', array('label' => 'Name',));
		$builder->add('cost');
		$builder
				->add('damage', 'number', array('label' => 'Damage',));
		$builder
				->add('penetration', 'number', array('label' => 'Penetration',));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver
				->setDefaults(
						array(
								'data_class' => 'Imbc\TankopediaBundle\Entity\Shell'));
	}

	public function getName() {
		return 'imbc_tankopediabundle_shelltype';
	}
}
