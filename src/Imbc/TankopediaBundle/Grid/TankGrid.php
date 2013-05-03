<?php

namespace Imbc\TankopediaBundle\Grid;

use Doctrine\Common\Persistence\ObjectManager;
use APY\DataGridBundle\Grid\Grid;
use APY\DataGridBundle\Grid\Column;
use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Action;

use Imbc\TankopediaBundle\Entity\Tank;

class TankGrid {
	protected $om;
	protected $grid;

	public function __construct(ObjectManager $om, Grid $grid) {
		$this->om = $om;
		$this->grid = $grid;
		$grid->setLimits(array(10, 20, 50));
		$grid->setDefaultOrder('name', 'desc');
		$grid->setId('tank');
	}

	public function getGrid() {
		$source = new Entity('ImbcTankopediaBundle:Tank');
		//        $this->grid->setColumns( $this->presetColumns() );
		$this->grid->setSource($source);
		$this->grid->setDefaultOrder('tier.name', 'asc');
		$this->addActionColumn();
		//        $this->grid->hideColumns( 'id' );
		//        $this->setFilters();

		return $this->grid;
	}

	// not in use for entity
	public function setFilters() {
		$this->grid->getColumn('tier')->setFilterType('select');
		$this->grid->getColumn('class')->setFilterType('select');
		$this->grid->getColumn('nationality')->setFilterType('select');
	}

	protected function addActionColumn() {
		$viewAction = new Action\RowAction('View', 'tankopedia_tank_show',
				false, '_self',
				array('class' => 'grid-action info ',
						'title' => 'View tank data'));
		$viewAction->setRouteParameters('slug');

		$this->grid->addRowAction($viewAction);
	}

	// not in use for entity
	protected function presetColumns() {
		return array(
				new Column\NumberColumn(
						array('id' => 'id', 'source' => true,
								'visible' => false, 'field' => 'id')),
				new Column\TextColumn(
						array('id' => 'name', 'title' => 'name',
								'source' => true, 'field' => 'name')),
				new Column\TextColumn(
						array('id' => 'tier', 'title' => 'tier',
								'source' => true, 'field' => 'tier')),
				new Column\TextColumn(
						array('id' => 'class', 'title' => 'class',
								'source' => true, 'field' => 'class')),
				new Column\TextColumn(
						array('id' => 'nationality', 'title' => 'nationality',
								'source' => true, 'field' => 'nationality')),
				new Column\BooleanColumn(
						array('id' => 'premium', 'title' => 'premium',
								'source' => true, 'field' => 'premium')),
				new Column\BooleanColumn(
						array('id' => 'reward', 'title' => 'reward',
								'source' => true, 'field' => 'reward')),);
	}
}
