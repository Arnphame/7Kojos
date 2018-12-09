<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChassisCoolerRepository")
 */
/** @ORM\Entity */
class ChassisCooler extends Product
{
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $size;


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
    public function getAirflow()
    {
        return $this->airflow;
    }

    /**
     * @param mixed $airflow
     */
    public function setAirflow($airflow): void
    {
        $this->airflow = $airflow;
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
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $RPM;
    /**
     * @ORM\Column(type="float", length=10)
     * @Assert\NotBlank()
     */
    private $airflow;
    /**
     * @ORM\Column(type="float", length=10)
     * @Assert\NotBlank()
     */
    private $noiseLevel;
}