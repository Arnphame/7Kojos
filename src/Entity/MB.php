<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MBRepository")
 */
/** @ORM\Entity */
class MB extends Product
{
    /**
     * @return mixed
     */
    public function getCpuSocket()
    {
        return $this->cpuSocket;
    }

    /**
     * @param mixed $cpuSocket
     */
    public function setCpuSocket($cpuSocket): void
    {
        $this->cpuSocket = $cpuSocket;
    }

    /**
     * @return mixed
     */
    public function getRamType()
    {
        return $this->ramType;
    }

    /**
     * @param mixed $ramType
     */
    public function setRamType($ramType): void
    {
        $this->ramType = $ramType;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
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
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $cpuSocket;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $ramType;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $size;
    /**
     * @ORM\Column(type="integer", length=6)
     * @Assert\NotBlank()
     */
    private $powerConsumption;

}
