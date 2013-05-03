<?php

namespace Imbc\TankopediaBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EngineType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
				->add('name', 'text', array('label' => 'Name',));
		$builder->add('cost');
		$builder->add('weight');
		$builder->add('power');
		$builder
				->add('fireChance', 'percent',
						array('label' => 'Change of Fire', 'type' => 'integer',));
		$builder
				->add('fuelType', 'choice',
						array(
								'choices' => array('Gazoline' => 'Gazoline',
										'Diesel' => 'Diesel',),
								'label' => 'Fuel Type', 'multiple' => false,
								'empty_value' => 'Pick Fuel Type',
								'empty_data' => null));
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
								'data_class' => 'Imbc\TankopediaBundle\Entity\Engine'));
	}

	public function getName() {
		return 'imbc_tankopediabundle_enginetype';
	}
}
