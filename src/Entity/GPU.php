<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GPURepository")
 */
/** @ORM\Entity */
class GPU extends Product
{

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     */
    public function setMemory($memory): void
    {
        $this->memory = $memory;
    }

    /**
     * @return mixed
     */
    public function getCoreClock()
    {
        return $this->coreClock;
    }

    /**
     * @param mixed $coreClock
     */
    public function setCoreClock($coreClock): void
    {
        $this->coreClock = $coreClock;
    }

    /**
     * @return mixed
     */
    public function getMemoryType()
    {
        return $this->memoryType;
    }

    /**
     * @param mixed $memoryType
     */
    public function setMemoryType($memoryType): void
    {
        $this->memoryType = $memoryType;
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
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $memory;
    /**
     * @ORM\Column(type="float", length=10)
     * @Assert\NotBlank()
     */
    private $coreClock;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $memoryType;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $size;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $powerConsumption;
}