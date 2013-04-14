<?php

namespace Imbc\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Role\RoleInterface;

/**
 * @ORM\Entity(repositoryClass="Imbc\SecurityBundle\Entity\Repository\RoleRepository")
 * @ORM\Table(name="security__role")
 */
class Role implements RoleInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
      * @ORM\OneToMany(targetEntity="Imbc\SecurityBundle\Entity\Role", mappedBy="parent")
      * @ORM\OrderBy({"name"="ASC"})
      */
    protected $children;

    /**
      * @ORM\ManyToOne(targetEntity="Imbc\SecurityBundle\Entity\Role", inversedBy="children")
      * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
      */
    protected $parent;

    /**
      * @ORM\OneToMany(targetEntity="Imbc\SecurityBundle\Entity\Permission", mappedBy="role")
      */
    protected $permissions;

    public function __construct( $roleName )
    {
        $this->name = $roleName;
        $this->children = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName( $name )
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription( $description )
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get role name
     *
     * @return string
     */
    public function getRole()
    {
        return $this->getName();
    }

    /**
     * Add child
     *
     * @param \Imbc\SecurityBundle\Entity\Role $child
     */
    public function addRole( Role $child )
    {
        $this->children[] = $child;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param Imbc\SecurityBundle\Entity\Role $parent
     */
    public function setParent( Role $parent )
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return Imbc\SecurityBundle\Entity\Role
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function __toString()
    {
        return $this->getDescription();
    }
}