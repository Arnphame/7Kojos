<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RAMRepository")
 */
/** @ORM\Entity */
class RAM extends Product
{

    /**
     * @return mixed
     */
    public function getRAMtype()
    {
        return $this->RAMtype;
    }

    /**
     * @param mixed $RAMtype
     */
    public function setRAMtype($RAMtype): void
    {
        $this->RAMtype = $RAMtype;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getCAS()
    {
        return $this->CAS;
    }

    /**
     * @param mixed $CAS
     */
    public function setCAS($CAS): void
    {
        $this->CAS = $CAS;
    }
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $RAMtype;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $speed;
    /**
     * @ORM\Column(type="integer", length=6)
     * @Assert\NotBlank()
     */
    private $CAS;
}
