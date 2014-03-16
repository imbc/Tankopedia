<?php

namespace Imbc\MenuBundle\Navigation;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\Request;

use Cisco\SecurityBundle\Authorisation\AccessControl;

class Menu
{
    protected $router;
    protected $currentRoute;
//    protected $accessibleRoutes;
    protected $configuration;

    public function __construct( Router $router, Request $request, $configuration )
    {
        $this->router = $router;
        $this->currentRoute = $request->get( '_route' );
//        $this->accessibleRoutes = $accessControl->getAccessibleRoutes();
        $this->configuration = $configuration;
    }

    public function render( $key )
    {
        if( !array_key_exists( $key, $this->configuration ))
        {
            $msg = 'Specified key does not exist in menu configuration';
            throw new \InvalidArgumentException( $msg );
        }
        $config = $this->configuration[$key];
        if( !array_key_exists( 'items', $config )) return '';
        $ul = $this->createDomNode( 'ul' );
        if( array_key_exists( 'classes', $config ) )
        {
            if ( array_key_exists( 'ul', $config['classes'] ) )
            {
                $ul = $this->addAttribute( $ul, 'class', $config['classes']['ul'] );
            }
        }
        foreach ( $config['items'] as $itemConfig )
        {
            $ul = $this->append( $ul, $this ->renderNode( $itemConfig ));
        }

        return $ul;
    }

    protected function renderNode( $config )
    {

        $route = array_key_exists( 'route', $config ) ? $config['route'] : false;
//        if ( $route )
//        {
//            if ( !in_array( $route, $this->accessibleRoutes )) return '';
//        }
        $li = $this->createDomNode( 'li' );
        $a = $this->createDomNode( 'a' );
        if( array_key_exists( 'classes', $config ))
        {
            if( array_key_exists( 'li', $config['classes'] ))
            {
                $li = $this->addAttribute( $li, 'class', $config['classes']['li'] );
            }
            if( array_key_exists( 'a', $config['classes'] ))
            {
                $a = $this->addAttribute( $a, 'class', $config['classes']['a'] );
            }
        }
        if( array_key_exists( 'icon', $config ))
        {
            $a = $this->append( $a, $this->createDomNode( 'img', false, array( 'src' => $config['icon'] ), true ));
        }
        if ( !array_key_exists( 'label', $config ))
        {
            $msg = 'Malformed menu configuration, item must have a label';
            throw new \InvalidArgumentException( $msg );
        }
        $a = $this->append( $a, $config['label'] );
        // Has route or items?
        if( $route )
        {
            if ( $route == $this->currentRoute )
            {
                $a = $this->addClass( $a, 'active' );
            }
            else
            {
                $url = $this->router->generate( $config['route'] );
                $a = $this->addAttribute( $a, 'href', $url );
            }
            $li = $this->append( $li, $a );
        }
        elseif( array_key_exists( 'items', $config ))
        {
            // Has items itself
            $listNodes = '';
            foreach ( $config['items'] as $itemConfig )
            {
                $listNodes .= $this->renderNode( $itemConfig );
            }
            if ( '' == $listNodes ) return '';
            $ul = $this->append( $this->createDomNode( 'ul' ), $listNodes );
            $li = $this->append( $li, $a );
            $li = $this->append( $li, $ul );
        }
        if( !array_key_exists( 'route', $config ) && !array_key_exists( 'items', $config ))
        {
            $msg  = 'Malformed menu configuration, expected either ';
            $msg .= 'a route name or sub-items for item ' . $config['label'];
            throw new \InvalidArgumentException( $msg );
        }
        return $li;
    }

    protected function createDomNode( $name, $text = '', array $attributes = array(), $shorthand = false )
    {
        $node = $shorthand
              ? '<' . $name .  ' />'
              : '<' . $name .  '>' . $text . '</' . $name . '>';
        foreach ( $attributes as $key => $value )
        {
            $node = $this->addAttribute( $node, $key, $value, $shorthand );
        }

        return $node;
    }

    protected function append( $parent, $child )
    {
        $pos = strrpos( $parent, '<' );
        if ( false !== $pos )
        {
            $tagStart = substr( $parent, 0, $pos );
            $tagEnd = substr( $parent, $pos );
            $parent = $tagStart . $child . $tagEnd;
        }

        return $parent;
    }

    protected function addAttribute( $node, $key, $value, $shorthand = false )
    {
        $needle = $shorthand ? ' ' : '>';
        $pos = strpos( $node, $needle );
        if ( false !== $pos )
        {
            if ( $shorthand ) $pos++;
            $tagStart = substr( $node, 0, $pos );
            $tagEnd = substr( $node, $pos );
            $node = $tagStart . ' ' . $key . '="' . $value . '"' . $tagEnd;
        }

        return $node;
    }

    protected function addClass( $node, $class )
    {
        $needle = 'class="';
        $pos = strpos( $node, $needle );
        if ( false !== $pos )
        {
            $pos += strlen( $needle );
            $tagStart = substr( $node, 0, $pos );
            $tagEnd = substr( $node, $pos );
            $node = $tagStart . $class . ' ' . $tagEnd;
        }
        else
        {
            $this->addAttribute( $node, 'class', $class );
        }

        return $node;
    }
}
