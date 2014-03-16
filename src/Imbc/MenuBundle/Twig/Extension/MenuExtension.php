<?php

namespace Imbc\MenuBundle\Twig\Extension;

use Twig_Extension;
use Twig_Function_Method;

class MenuExtension extends Twig_Extension
{
    protected $container;

    public function __construct( $container )
    {
        $this->container = $container;
    }

    public function getName()
    {
        return 'menu_extension';
    }

    public function getFunctions()
    {
        return array(
            'menu' => new Twig_Function_Method( $this, 'renderMenu', array(
                'is_safe' => array( 'html' ),
            )),
        );
    }

    public function renderMenu( $menu )
    {
        return $this->container->get( 'imbc.menu' )->render( $menu );
    }
}
