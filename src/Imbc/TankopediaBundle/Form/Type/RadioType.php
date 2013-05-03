<?php

namespace Imbc\TankopediaBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RadioType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
				->add('name', 'text', array('label' => 'Name',));
		$builder
				->add('cost', 'text', array('label' => 'Cost',));
		$builder
				->add('weight', 'text', array('label' => 'Weight',));
		$builder
				->add('signalRange', 'text', array('label' => 'Name',));
		$builder
				->add('tier', 'entity',
						array('empty_data' => null,
								'empty_value' => '(Choose a Tier)',
								'required' => true,
								'class' => 'ImbcTankopediaBundle:Tier',
								'property' => 'name', 'label' => 'Tier',
						//            'expanded'      => true,
						));
		$builder
				->add('nationality', 'entity',
						array('empty_data' => null,
								'empty_value' => '(Choose a Nationality)',
								'required' => true,
								'class' => 'ImbcTankopediaBundle:Nationality',
								'property' => 'name', 'label' => 'Nationality',
						//            'expanded'      => true,
						));
		$builder
				->add('tanks', 'entity',
						array(
								//            'empty_data'    => null,
								//            'empty_value'   => '(Choose one or more Tanks)',
								'required' => false,
								'class' => 'ImbcTankopediaBundle:Tank',
								'property' => 'name',
								'label' => 'Tank Compatible',
								'multiple' => true,
						//            'group_by'      => 'type'
						//            'expanded'      => true,
						));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver
				->setDefaults(
						array(
								'data_class' => 'Imbc\TankopediaBundle\Entity\Radio'));
	}

	public function getName() {
		return 'imbc_tankopediabundle_radiotype';
	}
}
