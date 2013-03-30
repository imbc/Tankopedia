<?php

namespace IMBC\OTMBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="xvm_otm__font")
 */
class Font
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     * @var string 
     */    
    protected $name;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $size;
    
    /**
     * @ORM\Column(type="string")
     */    
    protected $align;
    
    /**
     * @ORM\Column(type="boolean")
     */    
    protected $bold;
    
    /**
     * @ORM\Column(type="boolean")
     */    
    protected $italic;
    
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     * @param string $name
     */
    public function setName( $name )
    {
        $this->name = $name;
    }

    /**
     * Get size
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set size
     * @param integer $size
     */
    public function setSize( $size )
    {
        $this->size = $size;
    }

    /**
     * Get align
     * @return string
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * Set align
     * @param string $align
     */
    public function setAlign( $align )
    {
        $this->align = $align;
    }

    /**
     * Get bold
     * @return boolean
     */
    public function getBold()
    {
        return $this->bold;
    }

    /**
     * Set bold
     * @param boolean $bold
     */
    public function setBold( $bold )
    {
        $this->bold = $bold;
    }

    /**
     * Get italic
     * @return boolean
     */
    public function getItalic()
    {
        return $this->italic;
    }

    /**
     * Set italic
     * @param boolean $italic
     */
    public function setItalic( $italic )
    {
        $this->italic = $italic;
    }
}