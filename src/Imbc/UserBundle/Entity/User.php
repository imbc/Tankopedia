<?php

namespace Imbc\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
//use Userfriendly\Bundle\SocialUserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
	 * @Assert\MinLength(limit="3", message="The name is too short.", groups={"Registration", "Profile"})
	 * @Assert\MaxLength(limit="255", message="The name is too long.", groups={"Registration", "Profile"})
	 */
	protected $name;

	public function __construct() {
		parent::__construct();
		// your own logic
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get name
	 *
	 * @return type
	 */
	public function getName() {
		return $this->name;
	}
}
