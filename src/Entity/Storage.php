<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StorageRepository")
 */
/** @ORM\Entity */
class Storage extends Product
{
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
    public function getStorageType()
    {
        return $this->storageType;
    }

    /**
     * @param mixed $storageType
     */
    public function setStorageType($storageType): void
    {
        $this->storageType = $storageType;
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm($form): void
    {
        $this->form = $form;
    }
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $size;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $storageType;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $form;

}
