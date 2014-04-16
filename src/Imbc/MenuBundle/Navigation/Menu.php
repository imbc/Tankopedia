<?php

namespace Imbc\MenuBundle\Navigation;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Twig_Environment;
use Imbc\MenuBundle\Navigation\Node;

class Menu
{
    protected $nodes;
    protected $router;
    protected $currentRoute;
    protected $configuration;
    protected $environment;
    protected $template;

    public function __construct( Router $router, Request $request, Twig_Environment $environment, $configuration )
    {
        $this->router = $router;
        $this->currentRoute = $request->get( '_route' );
        $this->environment = $environment;
        $this->template = $environment->loadTemplate( 'ImbcMenuBundle:Navigation:menu.html.twig' );
        $this->configuration = $configuration;
        $this->nodes = [];
    }

    public function render( $key, $type = null )
    {
        if( !array_key_exists( $key, $this->configuration ))
        {
            $msg = 'Specified key does not exist in menu configuration';
            throw new \InvalidArgumentException( $msg );
        }
        $this->nodes[$key] = $this->buildNode( $this->configuration[$key] );

        $block = $this->template->renderBlock( $type, array(
            'root' => $this->nodes[$key],
        ));

        /* DEBUG */
        if( $block == '' ) $block = 'No Menu Could be displayed';

        return $block;
    }

    public function buildNode( $config )
    {
        $label =        ( array_key_exists( 'label',    $config ))      ? $config['label']      : null;
        $route =        ( array_key_exists( 'route',    $config ))      ? $config['route']      : null;
        $classes =      ( array_key_exists( 'classes',  $config ))      ? $config['classes']    : null;
        $icon =         ( array_key_exists( 'icon',     $config ))      ? $config['icon']       : null;
        $title =        ( array_key_exists( 'title',    $config ))      ? $config['title']      : null;
        $children = array();
        if( array_key_exists( 'items', $config ))
        {
            foreach( $config['items'] as $key => $item )
            {
                $children[$key] = $this->buildNode( $item );
            }
        }

        return new Node( $label, $route, $classes, $children, $icon, $title );
    }
}
