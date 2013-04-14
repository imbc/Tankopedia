<?php

namespace Imbc\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Imbc\SecurityBundle\Entity\Role;

/**
 * @ORM\Entity(repositoryClass="Imbc\SecurityBundle\Entity\Repository\PermissionRepository")
 * @ORM\Table(name="security__permission")
 */
class Permission
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
      * @ORM\ManyToOne(targetEntity="Imbc\SecurityBundle\Entity\Role", inversedBy="permissions")
      */
    protected $role;

    /**
     * @ORM\Column(type="string")
     */
    protected $route;

    /**
     * @ORM\Column(type="integer")
     */
    protected $access = 0;

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
     * Set role
     *
     * @param \Imbc\SecurityBundle\Entity\Role $role
     */
    public function setRole( Role $role )
    {
        $this->role = $role;
    }

    /**
     * Get role
     *
     * @return \Imbc\SecurityBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set route
     *
     * @param string $route
     */
    public function setRoute( $route )
    {
        $this->route = $route;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set access
     *
     * @param integer $access
     */
    public function setAccess( $access )
    {
        $this->access = $access;
    }

    /**
     * Get access
     *
     * @return integer
     */
    public function getAccess()
    {
        return $this->access;
    }
}