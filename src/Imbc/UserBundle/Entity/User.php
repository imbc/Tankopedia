<?php

namespace Imbc\UserBundle\Entity;

use Userfriendly\Bundle\SocialUserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    //put your code here
}