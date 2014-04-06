<?php

namespace Imbc\FilterBundle\Filter;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use \Twig;

class Filters
{
    protected $om;
    protected $request;
    protected $environment;
//    protected $configuration;
    protected $template;

    const DEFAULT_TEMPLATE  = 'ImbcFilterBundle::filters.html.twig';
    const SELECT_TIER       = 'tier';
    const SELECT_NATION     = 'nation';
    const SELECT_CLASS      = 'class';
    const SELECT_TANK       = 'tank';

    public function __construct( ObjectManager $om, Request $request, Twig $environment )
    {
        $this->om = $om;
        $this->request = $request;
        $this->environment = $environment;
//        $this->configuration = $configuration;
    }

    public function render( $template )
    {
        ladybug_dump_die( 'Foo' );
        if( null === $template )
        {
            $template = self::DEFAULT_TEMPLATE;
        }

        ladybug_dump_die( $template );

        $this->template = $this->environment->loadTemplate( $template );

        return $this->template->renderBlock( 'filters', array(
            'filters' => $this->getFilters( $type ),
        ));
    }

    /**
     * @param Request $request
     * @param string $name
     * @param array $options
     *
     * @return string
     */
    private function presetSelectedValue( $name, $options )
    {

    }

    public function getFilters( $type )
    {
        $classes    = $this->getClasses();
        $nations    = $this->getNations();
        $tiers      = $this->getTiers();
        $tanks      = $this->getTanks();

        $filters = array();
        $inputs = array();

        $filters['nation'] = array(
            'label'         => 'Nation',
            'group'         => 'base',
            'mandatory'     => true,
            'empty'         => '>> Select Nation',
            'options'       => $nations,
            'selected'      => null,
        );

        $filters['tier'] = array(
            'label'         => 'Tier',
            'group'         => 'base',
            'mandatory'     => true,
            'empty'         => '>> Select Tier',
            'options'       => $tiers,
            'selected'      => null,
            'dependencies'  => array( self::SELECT_NATION ),
        );

        $filters['class'] = array(
            'label'         => 'Class',
            'group'         => 'base',
            'mandatory'     => true,
            'empty'         => '>> Select Class',
            'options'       => $classes,
            'selected'      => null,
            'dependencies'  => array( self::SELECT_NATION ),
            'enables'       => array( self::SELECT_TANK )
        );

        $filters['tanks'] = array(
            'label'         => 'Tanks',
            'group'         => 'vehicle',
            'mandatory'     => false,
            'empty'         => '>> Select Tank',
            'options'       => $tanks,
            'selected'      => null,
            'dependencies'  => array( self::SELECT_CLASS, self::SELECT_NATION, self::SELECT_TIER )
        );

        $inputs = $this->getInput( FALSE );


        return array( 'type' => $type, 'filters' => $filters, 'inputs' => $inputs );
    }

    private function getInput( $sortOrFilter = TRUE )
    {
        $submitBtn = array(
            'id'    => 'reportfilter-submit',
            'type'  => 'submit',
            'value' => 'Set Filter',
            'class' => 'formbutton filter',
            'name'  => 'filter',
        );
        $exportChkBox = array(
            'id'    => 'reportfilter-checkbox',
            'type'  => 'checkbox',
            'value' => 'Export Report',
            'class' => 'checkbox',
            'name'  => 'option',
            'label' => 'reportfilter-chkbox' // for label on the checkbox
        );
        $exportBtn = array(
            'id'    => 'reportfilter-export',
            'type'  => 'submit',
            'value' => 'Export Report',
            'class' => 'formbutton export',
            'name'  => 'export'
        );

        return ( $sortOrFilter ) ? array( $submitBtn, $exportChkBox ) : array( $exportBtn );
    }

    private function getClasses()
    {
        $options = array();
        $classes = $this->om
                        ->getRepository( 'ImbcTankopediaBundle:TankClass' )
                        ->getTankClasses();
        foreach( $classes as $value => $label )
        {
            $options[] = array(
                'value' => $value,
                'label' => $label,
            );
        }

        return $options;
    }

    private function getNations()
    {
        $options = array();
        $nations = $this->om
                        ->getRepository( 'ImbcTankopediaBundle:Nationality' )
                        ->getNationalities();
        foreach( $nations as $value => $label )
        {
            $options[] = array(
                'value' => $value,
                'label' => $label,
            );
        }

        return $options;
    }

    private function getTiers()
    {
        $options = array();
        $tiers = $this->om
                        ->getRepository( 'ImbcTankopediaBundle:Tier' )
                        ->getTiers();
        foreach( $tiers as $value => $label )
        {
            $options[] = array(
                'value' => $value,
                'label' => $label,
            );
        }

        return $options;
    }

    /**
     * Prepare query terms from submitted filter data
     *
     * @param array $filterData
     * @return array
     */
    public function prepareCriteria( $filterData )
    {
        $criteria = array();

        return $criteria;
    }

    /**
     * @param string $name
     * @return string
     */
    private function readFilter( $name, $filters )
    {
        $option = '';
        if ( array_key_exists( $name, $filters ) && array_key_exists( 'selected', $filters[$name] ))
        {
            $option = $filters[$name]['selected'];
        }
        return $option;
    }
}