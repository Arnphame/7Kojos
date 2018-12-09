<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChassisRepository")
 */
/** @ORM\Entity */
class Chassis extends Product
{

    /**
     * @return mixed
     */
    public function getChassisType()
    {
        return $this->chassisType;
    }

    /**
     * @param mixed $chassisType
     */
    public function setChassisType($chassisType): void
    {
        $this->chassisType = $chassisType;
    }

    /**
     * @return mixed
     */
    public function getGpuLength()
    {
        return $this->gpuLength;
    }

    /**
     * @param mixed $gpuLength
     */
    public function setGpuLength($gpuLength): void
    {
        $this->gpuLength = $gpuLength;
    }

    /**
     * @return mixed
     */
    public function getCoolerSupport()
    {
        return $this->cooler_support;
    }

    /**
     * @param mixed $cooler_support
     */
    public function setCoolerSupport($cooler_support): void
    {
        $this->cooler_support = $cooler_support;
    }
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $chassisType;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $gpuLength;
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $cooler_support;
}