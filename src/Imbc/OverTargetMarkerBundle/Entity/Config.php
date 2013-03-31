<?php

namespace Imbc\ExtendedVisualizationModBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * General parameters for the battle interface
 * @ORM\Entity
 * @ORM\Table(name="xvm__config")
 */
class Config
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Version of the config. Do not remove or change it unnecessarily.
     * @ORM\Column(type="string")
     */
    protected $configVersion;

    /**
     * Version of the editor.
     * @ORM\Column(type="string")
     */
    protected $editorVersion;

    /**
     * Config author
     * @ORM\Column(type="string",nullable=true)
     */
    protected $author;

    /**
     * Config description
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * Address to config updates
     * @ORM\Column(type="string")
     */
    protected $url;

    /**
     * Config last modified
     * @ORM\Column(type="string")
     */
    protected $date;

    /**
     * Supported version of the game
     * @ORM\Column(type="string")
     */
    protected $gameVersion;

    /**
     * The minimum required version of the XVM mod
     * @ORM\Column(type="string")
     */
    protected $modMinVersion;

    /**
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get configVersion
     * @return string
     */
    public function getConfigVersion()
    {
        return $this->configVersion;
    }

    /**
     * Set configVersion
     * @param string $configVersion
     */
    public function setConfigVersion( $configVersion )
    {
        $this->configVersion = $configVersion;
    }

    /**
     * Get editorVersion
     * @return string
     */
    public function getEditorVersion()
    {
        return $this->editorVersion;
    }

    /**
     * Set editorVersion
     * @param string $editorVersion
     */
    public function setEditorVersion( $editorVersion )
    {
        $this->editorVersion = $editorVersion;
    }

    /**
     * Get definition
     * @return Entity
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set definition
     * @param Entity $definition
     */
    public function setDefinition( $definition )
    {
        $this->definition = $definition;
    }

    /**
     * Get author
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set author
     * @param string $author
     */
    public function setAuthor( $author )
    {
        $this->author = $author;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     * @param string $description
     */
    public function setDescription( $description )
    {
        $this->description = $description;
    }

    /**
     * Get url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     * @param string $url
     */
    public function setUrl( $url )
    {
        $this->url = $url;
    }

    /**
     * Get date
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date
     * @param date $date
     */
    public function setDate( $date )
    {
        $this->date = $date;
    }

    /**
     * Get gameVersion
     * @return string
     */
    public function getGameVersion()
    {
        return $this->gameVersion;
    }

    /**
     * Set gameVersion
     * @param string $gameVersion
     */
    public function setGameVersion( $gameVersion )
    {
        $this->gameVersion = $gameVersion;
    }

    /**
     * Get modMinVersion
     * @return string
     */
    public function getModMinVersion()
    {
        return $this->modMinVersion;
    }

    /**
     * Set modMinVersion
     * @param string $modMinVersion
     */
    public function setModMinVersion( $modMinVersion )
    {
        $this->modMinVersion = $modMinVersion;
    }
}
