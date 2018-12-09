<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CPURepository")
 */
/** @ORM\Entity */
class CPU extends Product
{
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $socket;

    /**
     * @return mixed
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @param mixed $socket
     */
    public function setSocket($socket): void
    {
        $this->socket = $socket;
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
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * @param mixed $cores
     */
    public function setCores($cores): void
    {
        $this->cores = $cores;
    }

    /**
     * @return mixed
     */
    public function getPowerConsumption()
    {
        return $this->powerConsumption;
    }

    /**
     * @param mixed $powerConsumption
     */
    public function setPowerConsumption($powerConsumption): void
    {
        $this->powerConsumption = $powerConsumption;
    }
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $speed;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $cores;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $powerConsumption;

}