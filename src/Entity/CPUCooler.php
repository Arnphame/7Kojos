<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CPUCoolerRepository")
 */
/** @ORM\Entity */
class CPUCooler extends Product
{
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $RPM;


    /**
     * @return mixed
     */
    public function getRPM()
    {
        return $this->RPM;
    }

    /**
     * @param mixed $RPM
     */
    public function setRPM($RPM): void
    {
        $this->RPM = $RPM;
    }

    /**
     * @return mixed
     */
    public function getNoiseLevel()
    {
        return $this->noiseLevel;
    }

    /**
     * @param mixed $noiseLevel
     */
    public function setNoiseLevel($noiseLevel): void
    {
        $this->noiseLevel = $noiseLevel;
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
    public function getCPUCoolerType()
    {
        return $this->CPUCoolerType;
    }

    /**
     * @param mixed $CPUCoolerType
     */
    public function setCPUCoolerType($CPUCoolerType): void
    {
        $this->CPUCoolerType = $CPUCoolerType;
    }
    /**
     * @ORM\Column(type="float", length=10)
     * @Assert\NotBlank()
     */
    private $noiseLevel;

    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $size;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $CPUCoolerType;
}