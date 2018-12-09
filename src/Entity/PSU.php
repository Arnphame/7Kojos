<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use App\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PSURepository")
 */
/** @ORM\Entity */
class PSU extends Product
{
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $form;

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
     * @return mixed
     */
    public function getWatts()
    {
        return $this->watts;
    }

    /**
     * @param mixed $watts
     */
    public function setWatts($watts): void
    {
        $this->watts = $watts;
    }

    /**
     * @return mixed
     */
    public function getModular()
    {
        return $this->modular;
    }

    /**
     * @param mixed $modular
     */
    public function setModular($modular): void
    {
        $this->modular = $modular;
    }
    /**
     * @ORM\Column(type="integer", length=10)
     * @Assert\NotBlank()
     */
    private $watts;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $modular;
}