<?php

namespace Imbc\MenuBundle\Navigation;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

use Imbc\MenuBundle\Navigation\Node;

class Menu
{
    protected $nodes;
    protected $router;
    protected $currentRoute;
    protected $configuration;
    protected $templating;

    public function __construct( Router $router, Request $request, EngineInterface $templating, $configuration )
    {
        $this->router = $router;
        $this->currentRoute = $request->get( '_route' );
        $this->templating = $templating;
        $this->configuration = $configuration;
        $this->nodes = [];
    }

    public function render( $key )
    {
        if( !array_key_exists( $key, $this->configuration ))
        {
            $msg = 'Specified key does not exist in menu configuration';
            throw new \InvalidArgumentException( $msg );
        }
        $config = $this->configuration[$key];

        $this->nodes[$key] = $this->buildNode( $config );

//        ladybug_dump_die( $this->nodes['main'] );

        return $this->templating->render( 'ImbcMenuBundle:Menu:menu.html.twig', array(
            'root' => $this->nodes['main'],
        ));
    }

    public function buildNode( $config )
    {
        $label = ( array_key_exists( 'label', $config )) ? $config['label'] : null;
        $route = ( array_key_exists( 'route', $config )) ? $config['route'] : null;
        $class = ( array_key_exists( 'class', $config )) ? $config['class'] : null;
        $children = array();
        if( array_key_exists( 'items', $config ))
        {
            foreach( $config['items'] as $key => $item )
            {
                $children[$key] = $this->buildNode( $item );
            }
        }

        return new Node( $label, $route, $class, $children );
    }
}
