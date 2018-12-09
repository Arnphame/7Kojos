<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity("productNumber")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
 *     "MB" = "MB",
 *     "RAM" = "RAM",
 *     "Storage" = "Storage",
 *     "CPU" = "CPU",
 *     "GPU" = "GPU",
 *     "PSU" = "PSU",
 *     "Chassis" = "Chassis",
 *     "CPUCooler" = "CPUCooler",
 *     "ChassisCooler" = "ChassisCooler"
 * })
 */
abstract class Product
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", unique=true)
     * @Assert\NotBlank()
     */
    private $productNumber;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $name;
    /**
     * @ORM\Column(type="float", length=6)
     * @Assert\NotBlank()
     * @Assert\Range(min = 0, minMessage = "Price must be higher than {{ limit }}")
     */
    private $price;
    /**
     * @ORM\Column(type="float", length=6)
     * @Assert\Range(min = 0, minMessage = "Price must be higher than {{ limit }}")
     */
    private $discountPrice;
    /**
     * @ORM\Column(type="integer", length=4, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Range(min = -1, minMessage = "Quantity must be higher than {{ limit }}")
     */
    private $quantity;
    /**
     * @ORM\Column(type="date")
     * @Assert\Date
     */
    private $addDate;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $longDescription;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $shortDescription;
    /**
     * @ORM\Column(type="date",nullable=true)
     * @Assert\Date
     */
    private $lastEditDate;
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $discountEndDate;
    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $warrantyTime;

    public function getProductNumber()
    {
        return $this->productNumber;
    }
    public function setProductNumber($number)
    {
        $this->productNumber = $number;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setDiscountPrice($price)
    {
        $this->discountPrice = $price;
    }
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setAddDate($date)
    {
        $this->addDate = $date;
    }
    public function getAddDate()
    {
        return $this->addDate;
    }
    public function setLongDescription($description)
    {
        $this->longDescription = $description;
    }
    public function getLongDescription()
    {
        return $this->longDescription;
    }
    public function setShortDescription($description)
    {
        $this->shortDescription = $description;
    }
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
    public function setLastEditDate($date)
    {
        $this->lastEditDate = $date;
    }
    public function getLastEditDate()
    {
        return $this->lastEditDate;
    }
    public function setDiscountEndDate($date)
    {
        $this->discountEndDate = $date;
    }
    public function getDiscountEndDate()
    {
        return $this->discountEndDate;
    }
    public function setWarrantyTime($time)
    {
        $this->warrantyTime = $time;
    }
    public function getWarrantyTime()
    {
        return $this->warrantyTime;
    }
}









