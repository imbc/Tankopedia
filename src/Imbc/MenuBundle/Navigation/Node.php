<?php

namespace Imbc\MenuBundle\Navigation;

class Node
{
    protected $label;
    protected $route;
    protected $class;
    protected $children;

    function __construct( $label, $route, $class, $children = array() )
    {
        $this->label = $label;
        $this->route = $route;
        $this->class = $class;
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

    public function getClass()
    {
        return $this->class;
    }

    public function setClass( $class )
    {
        $this->class = $class;

        return $this;
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