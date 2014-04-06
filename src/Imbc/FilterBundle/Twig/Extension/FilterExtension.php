<?php

namespace Imbc\FilterBundle\Twig\Extension;

use Twig_Extension;
use Twig_Function_Method;

class FilterExtension extends Twig_Extension
{
    protected $container;

    public function __construct( $container )
    {
        $this->container = $container;
    }

    public function getName()
    {
        return 'filter_extension';
    }

    public function getFunctions()
    {
        return array(
            'filters' => new Twig_Function_Method( $this, 'renderFilters', array(
                'is_safe' => array( 'html' ),
            )),
        );
    }

    public function renderFilters()
    {
        return $this->container->get( 'imbc.filter' )->render();
    }
}
