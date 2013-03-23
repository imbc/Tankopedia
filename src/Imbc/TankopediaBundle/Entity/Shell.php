<?php

namespace Imbc\TankopediaBundle\Entity;;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Imbc\TankopediaBundle\Entity\Repository\ShellRepository")
 * @ORM\Table(name="top__shell")
 */
class Shell
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $gun;

    /**
     * @ORM\Column(name="silver", type="integer")
     */
    private $silver;

    /**
     * @ORM\Column(name="gold", type="integer")
     */
    private $gold;
}