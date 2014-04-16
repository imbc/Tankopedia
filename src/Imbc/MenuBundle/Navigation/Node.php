<?php

namespace Imbc\MenuBundle\Navigation;

class Node
{
    protected $label;
    protected $route;
    protected $classes;
    protected $children;

    function __construct( $label, $route, $classes = array(), $children = array() )
    {
        $this->label = $label;
        $this->route = $route;
        $this->classes = $classes;
        $this->children = $children;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel( $label )
    {
        $this->label = $label;

        return $this;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function setRoute( $route )
    {
        $this->route = $route;

        return $this;
    }

    public function getClasses()
    {
        return $this->classes;
    }

    public function setClasses( $classes = array() )
    {
        $this->classes = $classes;

        return $this;
    }

    public function addClass( $class )
    {
        if( !in_array( $class, $this->classes ) )
        {
            $this->classes[] = $class;
        }
    }

    public function removeClass( $class )
    {
        if( in_array( $class, $this->classes ) )
        {
            unset( $this->classes[array_search( $class, $this->classes )] );
        }
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon( $icon )
    {
        $this->icon = $icon;

        return $this;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren( $children )
    {
        $this->children = $children;

        return $this;
    }

    public function addChild( Node $node )
    {
        if( !array_key_exists( $node->getKey(), $this->children ))
        {
            $this->children[] = $node ;

            return $this;
        }

        return false;
    }
}