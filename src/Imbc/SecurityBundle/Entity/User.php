<?php

namespace Imbc\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity(repositoryClass="Imbc\SecurityBundle\Entity\Repository\UserRepository")
 * @ORM\Table(name="security__user")
 */
class User implements UserInterface, \Serializable, AdvancedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $salt;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="integer")
     */
    protected $active;

    /**
     * @ORM\Column(name="last_login",type="datetime",nullable=true)
     */
    protected $lastLogin;

    /**
     * @ORM\ManyToMany(targetEntity="Imbc\SecurityBundle\Entity\Role", cascade={"persist","remove"})
     * @ORM\JoinTable(name="security__user_role",
     *   joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     *   )
     */
    protected $roles;

    /**
     * @ORM\Column(name="created_at",type="datetime")
     */
    protected $createdAt;

    public function __construct()
    {
        $this->active = true;
        $this->salt = md5( uniqid( null, true ));
        $this->roles = new ArrayCollection();
        $this->createdAt = new \DateTime();
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
     * Set active
     *
     * @param integer $active
     */
    public function setActive( $active )
    {
        $this->active = $active ? 1 : 0;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Is active
     *
     * @return boolean
     */
    public function isActive()
    {
        return $this->active == 1 ? true : false;
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\ArrayCollection roles
     */
    public function getRoles()
    {
//        if( count( $this->roles ) == 0 )
//        {
//            $this->addRole( new Role( 'ROLE_USER' ) );
//        }
        return $this->roles;
    }

    /**
     * Set roles
     *
     * @param \Doctrine\Common\Collections\ArrayCollection $roles
     */
    public function setRoles( ArrayCollection $roles = null )
    {
        $this->roles = $roles;
    }

    /**
     * Add role
     *
     * @param \SecurityBundle\Entity\Role $role
     */
    public function addRole( Role $role )
    {
        $this->roles->add( $role );
    }

    /**
     * Remove role
     *
     * @param \SecurityBundle\Entity\Role $role
     */
    public function removeRole( Role $role )
    {
        $this->roles->removeElement( $role );
    }

    /**
     * Compare user role
     *
     * @param \Symfony\Component\Security\Core\User\UserInterface $user
     * @return boolean
     */
    public function isEqualTo( UserInterface $user )
    {
        if ( !$user instanceof User ) return false;
        if ( $this->username !== $user->getUsername() ) return false;
        return true;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername( $username )
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set lastLogin
     *
     * @param datetime $lastLogin
     */
    public function setLastLogin( \DateTime $lastLogin )
    {
        $this->lastLogin = $lastLogin;
    }

    /**
     * Get lastLogin
     *
     * @return datetime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt( \DateTime $createdAt )
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() { }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize( array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }

    public function __toString()
    {
        return $this->username;
    }

    public function isAccountNonExpired()
    {
        return TRUE;
    }

    public function isAccountNonLocked()
    {
        return TRUE;
    }

    public function isCredentialsNonExpired()
    {
        return TRUE;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }
}